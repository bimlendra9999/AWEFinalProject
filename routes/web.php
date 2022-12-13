<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', function () {
    return view('./front/home');
});

Route::group(['prefix'=>'back','middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

    Route::get('/category',[CategoryController::class,'index'])->name('admin.category');
    Route::get('/create',[CategoryController::class,'create'])->name('admin.create');
    Route::delete('category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
