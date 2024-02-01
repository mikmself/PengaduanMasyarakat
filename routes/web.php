<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('frontend.index');})->name('index');
Route::prefix('/user')->group(function (){
    Route::middleware('auth')->group(function (){
        Route::get('/complaints',[\App\Http\Controllers\HomeController::class,'complaints'])->name('index-complaints');
        Route::get('/complaint',[\App\Http\Controllers\HomeController::class,'complaint'])->name('create-complaint');
        Route::get('/complaint/detail/{id}',[\App\Http\Controllers\HomeController::class,'detailComplaint'])->name('detailComplaint');
        Route::post('/storeComplaint',[\App\Http\Controllers\HomeController::class,'storeComplaint'])->name('store-complaint');
    });
});
Route::prefix('/admin/dashboard')->middleware(['auth','ceklevel'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('index-admin');
        Route::get('/create',[\App\Http\Controllers\AdminController::class,'create'])->name('create-admin');
        Route::post('/store',[\App\Http\Controllers\AdminController::class,'store'])->name('store-admin');
        Route::get('/edit/{id}',[\App\Http\Controllers\AdminController::class,'edit'])->name('edit-admin');
        Route::put('/update/{id}',[\App\Http\Controllers\AdminController::class,'update'])->name('update-admin');
        Route::get('/destroy/{id}',[\App\Http\Controllers\AdminController::class,'destroy'])->name('destroy-admin');
    });
    Route::prefix('user')->group(function (){
        Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('index-user');
        Route::get('/create',[\App\Http\Controllers\UserController::class,'create'])->name('create-user');
        Route::post('/store',[\App\Http\Controllers\UserController::class,'store'])->name('store-user');
        Route::get('/edit/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('edit-user');
        Route::put('/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('update-user');
        Route::get('/destroy/{id}',[\App\Http\Controllers\UserController::class,'destroy'])->name('destroy-user');
    });
    Route::prefix('category')->group(function (){
        Route::get('/',[\App\Http\Controllers\ComplaintCategoryController::class,'index'])->name('index-category');
        Route::get('/create',[\App\Http\Controllers\ComplaintCategoryController::class,'create'])->name('create-category');
        Route::post('/store',[\App\Http\Controllers\ComplaintCategoryController::class,'store'])->name('store-category');
        Route::get('/edit/{id}',[\App\Http\Controllers\ComplaintCategoryController::class,'edit'])->name('edit-category');
        Route::put('/update/{id}',[\App\Http\Controllers\ComplaintCategoryController::class,'update'])->name('update-category');
        Route::get('/destroy/{id}',[\App\Http\Controllers\ComplaintCategoryController::class,'destroy'])->name('destroy-category');
    });
    Route::prefix('complaint')->group(function (){
        Route::get('/',[\App\Http\Controllers\ComplaintController::class,'index'])->name('index-complaint');
        Route::get('/show/{id}',[\App\Http\Controllers\ComplaintController::class,'show'])->name('show-complaint');
        Route::get('/destroy/{id}',[\App\Http\Controllers\ComplaintController::class,'destroy'])->name('destroy-complaint');
    });
    Route::prefix('response')->group(function (){
        Route::get('/',[\App\Http\Controllers\ResponseController::class,'index'])->name('index-response');
        Route::get('/create',[\App\Http\Controllers\ResponseController::class,'create'])->name('create-response');
        Route::post('/store',[\App\Http\Controllers\ResponseController::class,'store'])->name('store-response');
        Route::get('/edit/{id}',[\App\Http\Controllers\ResponseController::class,'edit'])->name('edit-response');
        Route::put('/update/{id}',[\App\Http\Controllers\ResponseController::class,'update'])->name('update-response');
        Route::get('/destroy/{id}',[\App\Http\Controllers\ResponseController::class,'destroy'])->name('destroy-response');
    });
});

Auth::routes();

