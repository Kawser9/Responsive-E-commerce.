<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FloorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/',[DashboardController::class, 'dashboard'])->name('dashboard');



// .............................................................................
Route::get('/admin',[AdminController::class, 'list'])->name('admin.list');
Route::get('/admin/create',[AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/update',[AdminController::class, 'update'])->name('admin.update');





// .............................................................................
Route::get('/home',[HomeController::class, 'list'])->name('home.list');



// .............................................................................
Route::get('/floor',[FloorController::class, 'list'])->name('floor.list');