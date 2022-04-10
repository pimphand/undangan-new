<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocialiteController;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DataUser;
use App\Http\Livewire\Admin\Faq;
use App\Http\Livewire\Admin\Feature\DataFeature;
use App\Http\Livewire\Admin\Theme\DataTheme;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Customer\Invitation\Bride;
use App\Http\Livewire\Customer\Invitation\Create;
use App\Http\Livewire\Customer\Invitation\Data;
use App\Http\Livewire\Customer\Invitation\Event;
use App\Http\Livewire\Customer\Invitation\Gallery;
use App\Http\Livewire\Customer\Invitation\Log;
use App\Http\Livewire\Customer\Invitation\SendInvitation;
use App\Http\Livewire\Customer\Invitation\Setting;
use App\Http\Livewire\Customer\Invitation\Story;
use App\Http\Livewire\Theme\ListThema;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/wedding/{slug}', [FrontendController::class, 'undangan'])->name('undangan.index');
Route::get('/data-comment/{slug}', [FrontendController::class, 'dataComment']);
Route::post('/wedding/{slug}', [FrontendController::class, 'sendcomment'])->name('sendcomment');
Route::get('/tema', [FrontendController::class, 'tema'])->name('tema-data');
// data
Route::get('/data-faq', [FrontendController::class, 'dataFaq'])->name('faq-data');
Route::get('/data-why', [FrontendController::class, 'why'])->name('why-data');
Route::get('/list-theme', [FrontendController::class, 'dataFaq'])->name('list-theme');
Route::get('/data-feature', [FrontendController::class, 'feature'])->name('feature-data');
Route::get('/demo/{slug}', [FrontendController::class, 'demo'])->name('demo');
Route::get('/register-customer', Register::class)
    ->name('register');

require __DIR__ . '/auth.php';
// google
Route::get('/google/rederect',  [SocialiteController::class, 'google'])->name('google.redirect');
Route::get('/google/callback',  [SocialiteController::class, 'googleCallback'])->name('google.callback');
// github
Route::get('/github/rederect',  [SocialiteController::class, 'github'])->name('github.redirect');
Route::get('/github/callback',  [SocialiteController::class, 'githubCallback'])->name('github.callback');
// facebook
Route::get('/facebook/rederect',  [SocialiteController::class, 'facebook'])->name('facebook.redirect');
Route::get('/facebook/callback',  [SocialiteController::class, 'facebookCallback'])->name('facebook.callback');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::middleware(['role:0'])->group(function () {
        Route::get('/theme', DataTheme::class)->name('theme');
        Route::get('/user', DataUser::class)->name('user');
        Route::get('/feature', DataFeature::class)->name('feature');
        Route::get('/faq', Faq::class)->name('faq');
    });

    Route::middleware(['role:1|2'])->group(function () {
        Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
            Route::get('/create-invie', Create::class)->name('invitation.create');
            Route::get('/user', Data::class)->name('invitation.index');
            Route::get('/tema', ListThema::class)->name('tema.index');
            Route::get('/mempelai', Bride::class)->name('bride.index');
            Route::get('/event', Event::class)->name('event.index');
            Route::get('/gallery', Gallery::class)->name('gallery.index');
            Route::get('/story', Story::class)->name('story.index');
            Route::get('/setting', Setting::class)->name('setting.index');
            Route::get('/statistik-undangan', Log::class)->name('statistik.index');
            Route::get('/send-invitation', SendInvitation::class)->name('send-invitation.index');
            Route::get('/export-kontak', [CustomerController::class, 'import'])->name('contact.export');
            Route::get('/history', [CustomerController::class, 'history'])->name('history.index');
        });
    });
});
