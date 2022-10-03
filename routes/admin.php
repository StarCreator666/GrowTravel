<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MobilController,WisataController};

Route::group(['middleware' => 'admin'],function () {
    //Route Admin
    Route::view('/admin','admin.index');
    
    // Route Wisata
    Route::get('admin/wisata',[WisataController::class,'detail2']);
    Route::get('admin/wisata/tambah',[WisataController::class,'add_form']);
    Route::post('admin/wisata/inclusion-dropdown',[WisataController::class,'inclusion_dropdown'])->name('inclusion_dropdown');
    Route::view('admin/wisata/lokasi','admin.wisata.lokasi');
    Route::view('admin/wisata/inclusion','admin.wisata.inclusion');
    Route::view('admin/wisata/exclusion','admin.wisata.exclusion');
    Route::post('/add-post',[WisataController::class,'add_post'])->name('add.post');
    Route::post('/add-lokasi',[WisataController::class,'add_lokasi'])->name('add.lokasi');
    Route::post('/add-inclusion',[WisataController::class,'add_inclusion'])->name('add.inclusion');
    Route::post('/add-exclusion',[WisataController::class,'add_exclusion'])->name('add.exclusion');

});    
