<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DataUser;
use App\Http\Livewire\Admin\Theme\DataTheme;
use App\Http\Livewire\Customer\Invitation\Data;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'auth.login');

require __DIR__ . '/auth.php';

// Login Google
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // $user->token
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::middleware(['auth', 'role:0'])->group(function () {
        Route::get('/theme', DataTheme::class)->name('theme');
        Route::get('/user', DataUser::class)->name('user');
    });
    Route::middleware(['auth', 'role:1|2'])->group(function () {
        Route::group(["prefix" => "customer", "as" => "customer."], function () {
            Route::get('/user', Data::class)->name('invitation.index');
        });
    });
});
