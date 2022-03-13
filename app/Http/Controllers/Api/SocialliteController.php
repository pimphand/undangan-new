<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Invitation\Invite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialliteController extends Controller
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
