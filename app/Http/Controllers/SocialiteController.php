<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function google(Request $request)
    {
    }
    public function googleCallback(Request $request)
    {
    }


    public function github(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }
    public function githubCallback(Request $request)
    {
        $data = Socialite::driver('github')->user();
        // dd($data);
        $user = User::where('email', $data->email)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $user = User::create([
                'name' => $data->name,
                'username' => $data->name,
                'email' => $data->email,
                'whatsapp' => null,
                'password' => bcrypt(Str::random(16)),
            ]);
            auth()->login($user);
            return redirect()->route('dashboard');
        }
    }
}
