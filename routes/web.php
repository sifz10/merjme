<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FriendController;

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

Route::group(['middleware' => 'auth'], function () {
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
  if (Auth::user()->role == "super_admin") {
    return view('dashboard');
  }else {
    return redirect('/');
  }
})->middleware(['auth'])->name('dashboard');


Route::get('/profile/{slug}', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile-settings/{slug}', [ProfileController::class, 'profile_settings'])->name('profile_settings');
Route::post('/profile-settings-update', [ProfileController::class, 'profile_update'])->name('profile_update');
Route::post('/profile-change-password', [ProfileController::class, 'changePassword'])->name('changePassword');
Route::post('/profile-change-contact', [ProfileController::class, 'changeContact'])->name('changeContact');

Route::post('/social-accouts', [SocialController::class, 'socialAccouts'])->name('socialAccouts');


Route::get('/friend-request-sent/{receiver_id}', [FriendController::class, 'sentFriendRequest'])->name('sentFriendRequest');
Route::get('/friend-request-accept-request/{id}', [FriendController::class, 'accept_request'])->name('accept_request');
Route::get('/friend-request-delete-request/{id}', [FriendController::class, 'delete_request'])->name('delete_request');
});

Route::get('/logout', [FrontEndController::class, function(){
    Auth::logout();
    return redirect('/login');
}])->name('logout');
require __DIR__.'/auth.php';
