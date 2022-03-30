<?php

namespace App\Http\Livewire\Auth;

use App\Models\Invitation\Invite;
use App\Models\Invitation\Setting;
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
        try {
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
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => "Telah terjadi kesalahan",
                'icon' => 'error',
            ]);
        }
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
            $this->validate([
                'subdomain' => ['required'],
                'reg_username' => ['required', 'unique:users,username'],
                'reg_email' => ['required', 'email', 'unique:users,email'],
                'reg_password' => ['required', 'min:8', 'same:reg_konfirmasi_password'],
            ], [
                'reg_password.same' => 'Password tidak sama',
                'reg_username.unique' => 'Username sudah terdaftar',
                'reg_email.unique' => 'Email sudah terdaftar',
                'reg_email.email' => 'Email tidak valid',
                'reg_password.min' => 'Password minimal 8 karakter',
                'reg_password.required' => 'Password tidak boleh kosong',
                'reg_username.required' => 'Username tidak boleh kosong',
                'subdomain.required' => 'Subdomain tidak boleh kosong',
                'reg_email.required' => 'Email tidak boleh kosong',
            ]);

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
            Setting::create([
                'user_id' => $user->id,
            ]);
            Auth::login($user);
            DB::commit();
            return redirect()->intended(route('dashboard'));
        } catch (\Exception $t) {
            DB::rollback();
            foreach ($t->errors() as $error) {
                $this->dispatchBrowserEvent('swal', [
                    'type' => 'error',
                    'title' => $error,
                    'icon' => 'error',
                ]);
            }
            // $this->dispatchBrowserEvent('swal', [
            //     'type' => 'error',
            //     'title' => ,
            //     'icon' => 'error',
            // ]);
        }
    }
}
