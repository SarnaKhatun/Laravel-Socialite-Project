<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    //login google

    public function redirectToGoogle ()
    {
        return Socialite::driver('google')->redirect();
    }


    //callback google

    public function handleGoogleCallback ()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        // Return home after login
        return redirect(route('dashboard'));
    }


    //login facebook

    public function redirectToFacebook ()
    {
        return Socialite::driver('facebook')->redirect();
    }


    //callback facebook

    public function handleFacebookCallback ()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        // Return home after login
        return redirect(route('dashboard'));
    }


    //login github

    public function redirectToGithub ()
    {
        return Socialite::driver('github')->redirect();
    }


    //callback github

    public function handleGithubCallback ()
    {
        $user = Socialite::driver('github')->user();
        $this->_registerOrLoginUser($user);
        // Return home after login
        return redirect(route('dashboard'));
    }


    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if (!$user)
        {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }
}
