<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
});



Route::get('/logout', [FrontEndController::class, function(){
    Auth::logout();
    return redirect('/login');
}])->name('logout');
require __DIR__.'/auth.php';
