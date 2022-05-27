<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.register');
    }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    // logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // show login form
    public function login()
    {
        return view('user.login');
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


    // reset passowrd
    public function reset()
    {
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
        $posts = $user->posts()->get();


        // send posts to bot 
        if (isset($posts)) {
            $botUser = User::where('username', '=', 'deleted')->get()->first();

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