<?php

namespace App\Http\Controllers;

use App\Models\Invitation\Invite;
use App\Models\Invitation\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function google(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        $data = Socialite::driver('google')->user();
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
                'image' => $data->avatar,
                'whatsapp' => null,
                'password' => bcrypt(Str::random(16)),
            ]);
            Setting::create([
                'user_id' => $user->id,
            ]);
            $invite = Invite::create([
                "user_id" => $user->id,
                "subdomain" => Str::slug($data->name),
                'theme' => 'flower-watter',
            ]);

            $invite->bride()->create();
            $invite->event()->create();

            auth()->login($user);
            return redirect()->route('dashboard');
        }
    }


    public function github(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback(Request $request)
    {
        $data = Socialite::driver('github')->user();
        $user = User::where('email', $data->email)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $user = User::create([
                'name' => $data->name,
                'username' => $data->name,
                'email' => $data->email,
                'image' => $data->avatar,
                'whatsapp' => null,
                'password' => bcrypt(Str::random(16)),
            ]);
            $invite = Invite::create([
                "user_id" => $user->id,
                "subdomain" => Str::slug($data->name),
            ]);

            $invite->bride()->create();
            $invite->event()->create();
            Setting::create([
                'user_id' => $user->id,
            ]);
            auth()->login($user);
            return redirect()->route('dashboard');
        }
    }

    public function facebook(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback(Request $request)
    {
        $data = Socialite::driver('facebook')->user();
        $user = User::where('email', $data->email)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $user = User::create([
                'name' => $data->name,
                'username' => $data->name,
                'email' => $data->email,
                'image' => $data->avatar,
                'whatsapp' => null,
                'password' => bcrypt(Str::random(16)),
            ]);
            $invite = Invite::create([
                "user_id" => $user->id,
                "subdomain" => Str::slug($data->name),
            ]);

            $invite->bride()->create();
            $invite->event()->create();

            auth()->login($user);
            return redirect()->route('dashboard');
        }
    }
}
