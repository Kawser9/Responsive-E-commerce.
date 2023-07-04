<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;

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
Route::get('/house',[HouseController::class, 'list'])->name('house.list');



// .............................................................................
Route::get('/category',[CategoryController::class, 'list'])->name('category.list');
Route::get('/category-create',[CategoryController::class, 'categoryCreate'])->name('category.create');
Route::post('/category-store',[CategoryController::class, 'categoryStore'])->name('category.store');



// ................................................................................
Route::get('/product',[ProductController::class, 'list'])->name('product.list');
Route::get('/product-create',[ProductController::class, 'productCreate'])->name('product.create');
route::post('/product-store',[ProductController::class, 'productStore'])->name('product.store');



// ...............................................................................
Route::get('/supplier',[SupplierController::class, 'list'])->name('supplier.list');
Route::get('/supplier-create',[SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier-store',[SupplierController::class,'supplierStore'])->name('supplier.store');




//Frontend Start..............................................................
Route::get('/homepage',[FrontendController::class, 'master'])->name('home');





//Customer.............................................................................
Route::get('/customer',[CustomerController::class, 'list'])->name('customer.list');
Route::post('/customer-store',[CustomerController::class,'customerStore'])->name('customer.store');


// Route..............................................................................
Route::get('/brand',[BrandController::class, 'index'])->name('brand.list');
Route::get('/brand-create',[BrandController::class, 'create'])->name('brand.create');
Route::post('/brand-store',[BrandController::class, 'store'])->name('brand.store');



//Order..............................................................................
Route::get('/order',[OrderController::class, 'list'])->name('order.list');
Route::get('/order-create',[OrderController::class, 'create'])->name('order.create');
Route::post('/order-store',[OrderController::class, 'store'])->name('order.store');
