<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    // show profile 
    public function show($username)
    {
        $user = User::where('username', $username)->first();

        return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::find(auth()->user()->id);

        $profile = $user->profile;

        return view('user.update')->with(['profile' => $profile]);
    }



    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $fields = $request->except(['_token', '_method']);

        // filtering fields ------->
        $validFields = [];

        // checkboxes
        $validFields['email_visible'] = $request->boolean('email_visible');
        $validFields['birthday_visible'] = $request->boolean('birthday_visible');

        // remove the fields that are null
        foreach ($fields as $key => $value) {
            // if input values are not null 
            // and not email so to update email using User model instead of Profile model
            if ($value !== null && $key !== "email") {

                $validFields[$key] = $value;
            }
        }

        // store avatar image -------->
        $validAvatar = $request->hasFile('avatar') && $request->file('avatar')->isValid();

        if ($validAvatar) {
            $originalName = $request->avatar->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->avatar->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $validFields['avatar'] = $request->file('avatar')->storeAs('avatars', $fileName, 'public');
        }

        // update profile ------->
        $user->profile->update($validFields);

        // remove avatar image ------->
        if ($request->has('remove')) {
            $user->profile->avatar = null;
            $user->profile->save();
            return back()->with(['status' => 'Avatar removed successfully']);
        }



        // update email ------->
        if ($request->email !== $user->email) {

            $validEmail = $request->has('email') && $request->validate(['email' => 'email|unique:users']);

            if ($validEmail) {
                $user->email = $request->email;
                $user->save();
            }
        }


        return back()->with(['status' => 'Profile updated successfully']);
    }
}