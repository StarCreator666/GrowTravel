<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GoogleController, LoginController, MobilController, RegisterController, WisataController};
use App\Models\Wisata;

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

// Bahasa 
if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}',  'App\Http\Controllers\LocalizationController@lang');
    Route::get('/lang/{locale}',  'App\Http\Controllers\LocalizationController@lang');
}
// Bahasa End

Route::get('/', function () {
    return view('index');
});

// wisata route
Route::get('/wisata',[WisataController::class, 'index']);

// add 
Route::view('/add', 'add');
Route::view('/addm', 'addCars');
Route::post('/add-mobil',[MobilController::class,'add_post'])->name('add.mobil');

//login and register
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/post-login',[LoginController::class,'post'])->name('post.login');
Route::post('/register',[RegisterController::class,'post'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
// Route::get('google',function(){
//     return view('googleAuth');
// });
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback',[GoogleController::class,'handleGoogleCallback']);

// Mobil route
Route::get('/cars',[MobilController::class, 'index']);

//About us route
Route::view('about','aboutUs.index');