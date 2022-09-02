<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MobilController,WisataController};
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


// Mobil route
Route::get('/cars',[MobilController::class, 'index']);