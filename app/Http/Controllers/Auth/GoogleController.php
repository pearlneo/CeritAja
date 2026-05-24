<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Check if the user already exists
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            // Create a new user if it doesn't exist
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt('google-login'), // Generate a random password
            ]);
        }

        Auth::login($user);

        return redirect('dashboard');
    }
}