<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'min:4'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6']
        ], [
            'username.required' => "Username is required!",
            'username.min' => "Username must be at least 4 characters!",
            'email.required' => "Email is required!",
            'email.email' => "Email must be a valid email!",
            'password.required' => "Password is required!",
        ]);

        // hash password
        $validated['password'] = bcrypt($validated['password']);

        // create new user
        $user = User::create($validated);

        // create user associated profile
        $user->profile()->create([
            'user_id' => $user->id,
            'email' => $user->email,
            'birthday_visible' => 0,
            'email_visible' => 0
        ]);


        // login
        auth()->login($user);

        return redirect('/');
    }


    // logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // authenticate
    public function auth(Request $request)
    {
        $validatedData = $request->validate(
            ['login' => 'required', 'password' => 'required'],
            ['login.required' => 'Email or username is required!', 'password.required' => 'Password is required!']
        );

        // initial credentails
        $credentials['password'] = $validatedData['password'];


        // if login is email or username
        if (filter_var($validatedData['login'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $validatedData['login'];
        } else {
            $credentials['username'] = $validatedData['login'];
        }


        // authenticate
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }


        // invalid credentials error 
        return back()->withErrors(['login' => 'Invalid Credentials'])->onlyInput('login');
    }


    // google redurect
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // google auth
    public function googleAuth()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'email' => $googleUser->email,
        ], [
            'oauth_id' => $googleUser->id,
            'oauth_type' => 'google',
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);

        // if it's a new user
        if (!$user->username) {
            $user->username = $googleUser->name;
            $user->save();
        }

        Auth::login($user);

        return redirect('/');
    }

    // github redurect
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    // github auth
    public function githubAuth()
    {
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'email' => $githubUser->email,
        ], [
            'oauth_id' => $githubUser->id,
            'oauth_type' => 'github',
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);

        // if it's a new user
        if (!$user->username) {
            $user->username = $githubUser->name;
            $user->save();
        }

        Auth::login($user);

        return redirect('/');
    }

    // forgot passowrd
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => 'Check your email to reset your password '])
            : back()->withErrors(['email' => $status]);
    }


    // show reset password form
    public function showResetPassword($token)
    {
        return view('user.reset-password', ['token' => $token]);
    }

    // reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(

            $request->only('email', 'password', 'password_confirmation', 'token'),

            function ($user, $password) {
                $user->forceFill(['password' => Hash::make($password)])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect('/login')->with(['status' => 'Password updated successfully'])
            : back()->withErrors(['password' => 'Something went wrong, please try again']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $validFields = $request->validate(
            ['oldPassword' => 'required', 'password' => 'required|confirmed|min:6'],
            [
                'oldPassword.required' => 'Current password is required!',
                'password.required' => 'New password is required!'
            ]

        );

        $validPassword = Hash::check($validFields['oldPassword'], $user->password);

        if (!$validPassword) {
            return back()->withErrors([
                'oldPassword' => 'Incorrect password, Try again.'
            ]);
        }

        // check if new password is the same as crrent password
        $samePassword = Hash::check($validFields['password'], $user->password);

        if ($samePassword) {
            return back()->withErrors([
                'password' => 'New password cannot be the same as the old password!'
            ]);
        }

        // update password
        $user->password = Hash::make($validFields['password']);
        $user->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $posts = $user->posts;


        // send posts to bot 
        if (isset($posts)) {
            $botUser = User::where('username', '=', 'deleted')->first();

            foreach ($posts as $post) {
                $post->user_id = $botUser->id;
                $post->save();
            }

            $user->delete();
            return redirect('/');
        }

        $user->delete();
        return redirect('/');
    }
}
