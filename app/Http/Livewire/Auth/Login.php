<?php

namespace App\Http\Livewire\Auth;

use App\Models\Invitation\Invite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class Login extends Component
{

    public $username = '';

    /** @var string */
    public $password = '';
    public $title = 'Login';
    public $reg = "Login";

    public $subdomain;
    public $reg_email;
    public $reg_username;
    public $reg_password;
    public $reg_konfirmasi_password;

    /** @var bool */
    public $remember = false;

    public function login()
    {
        $this->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => "Data tidak ditemukan",
                'icon' => 'error',
            ]);

            return;
        }

        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function form($reg)
    {
        $this->title = $reg;
        $this->reg = $reg;
    }

    public function register()
    {
        DB::beginTransaction();
        try {
            // $this->validate([
            //     'subdomain' => ['required'],
            //     'reg_username' => ['required', 'unique:users,username'],
            //     'reg_email' => ['required', 'email', 'unique:users,email'],
            //     'reg_password' => ['required', 'min:8', 'same:reg_konfirmasi_password'],
            // ]);

            $user = User::create([
                'name' => $this->reg_username,
                'username' => $this->reg_username,
                'password' => Hash::make($this->reg_password),
                'email' => $this->reg_email,
            ]);

            $invite = Invite::create([
                "user_id" => $user->id,
                "subdomain" => Str::slug($this->subdomain),
            ]);

            $invite->bride()->create();
            $invite->event()->create();
            Auth::login($user, true);
            // return redirect()->intended(route('dashboard'));
            DB::commit();
        } catch (\Throwable $t) {
            DB::rollback();
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $t->getMessage(),
            ]);
        }
    }
}
