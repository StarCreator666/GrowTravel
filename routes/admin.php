<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MobilController,WisataController};


//Route Admin
Route::view('/admin','admin.index');

// Route Wisata
Route::view('admin/wisata','admin.wisata.index');
Route::view('admin/wisata/tambah','admin.wisata.tambah');
Route::post('/add-post',[WisataController::class,'add_post'])->name('add.post');


Route::view('about','aboutUs.index');