<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;

// use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;
use App\Http\Controllers\Website\RegistrationController;
use App\Http\Controllers\Website\FrontendController;

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
 
// Login............................................................................
Route::get('/admin-login',[UserController::class, 'login'])->name('admin.login');
Route::post('/admin/do-login',[UserController::class,'authenticate'])->name('login');


// Group........................................................................
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){



        // Logout........................................................................
        Route::get('/logout',[UserController::class,'destroy'])->name('logout');



        // Dashboard....................................................................
        Route::get('/',[DashboardController::class, 'dashboard'])->name('dashboard');



        // .............................................................................
        Route::get('/admin',[AdminController::class, 'list'])->name('admin.list');
        Route::get('/admin/create',[AdminController::class, 'create'])->name('admin.create');
        Route::get('/admin/update',[AdminController::class, 'update'])->name('admin.update');





        // .............................................................................
        Route::get('/house',[HouseController::class, 'list'])->name('house.list');



        //Category .............................................................................
        Route::get('/category',[CategoryController::class, 'list'])->name('category.list');
        Route::get('/category-create',[CategoryController::class, 'categoryCreate'])->name('category.create');
        Route::post('/category-store',[CategoryController::class, 'categoryStore'])->name('category.store');
        Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::put('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/category-show/{id}',[CategoryController::class,'show'])->name('category.show');
        Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');



        //Product ................................................................................
        Route::get('/product',[ProductController::class, 'list'])->name('product.list');
        Route::get('/product-create',[ProductController::class, 'productCreate'])->name('product.create');
        Route::post('/product-store',[ProductController::class, 'productStore'])->name('product.store');
        Route::get('/product-edit/{id}', [ProductController::class,'edit'])->name('product.edit');
        Route::put('/product-update/{id}', [ProductController::class,'update'])->name('product.update');
        Route::get('/product-show/{id}', [ProductController::class,'show'])->name('product.show');
        Route::get('/product-delete/{id}',[ProductController::class,'delete'])->name('product.delete');



        //Supplier ...............................................................................
        Route::get('/supplier',[SupplierController::class, 'list'])->name('supplier.list');
        Route::get('/supplier-create',[SupplierController::class, 'create'])->name('supplier.create');
        Route::post('/supplier-store',[SupplierController::class,'supplierStore'])->name('supplier.store');


        // Slider...........................................................................
        Route::get('slider',[SliderController::class,'list'])->name('slider.list');
        Route::get('slider-create',[SliderController::class,'create'])->name('slider.create');
        route::post('/slider-store',[SliderController::class, 'store'])->name('slider.store');
        Route::get('/slider-edit/{id}', [SliderController::class,'edit'])->name('slider.edit');
        Route::put('/slider-update/{id}', [SliderController::class,'update'])->name('slider.update');
        Route::get('/slider-show/{id}', [SliderController::class,'show'])->name('slider.show');
        Route::get('/slider-delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
        



        //Customer.............................................................................
        Route::get('/customer',[CustomerController::class, 'list'])->name('customer.list');
        




        //Brand..............................................................................
        Route::get('/brand',[BrandController::class, 'index'])->name('brand.list');
        Route::get('/brand-create',[BrandController::class, 'create'])->name('brand.create');
        Route::post('/brand-store',[BrandController::class, 'store'])->name('brand.store');
        Route::get('/brand-edit/{id}', [BrandController::class,'edit'])->name('brand.edit');
        Route::put('/brand-update/{id}', [BrandController::class,'update'])->name('brand.update');
        Route::get('/brand-show/{id}', [BrandController::class,'show'])->name('brand.show');
        Route::get('/brand-delete/{id}',[BrandController::class,'delete'])->name('brand.delete');




        //Order..............................................................................
        Route::get('/order',[OrderController::class, 'list'])->name('order.list');
        Route::get('/order-create',[OrderController::class, 'create'])->name('order.create');
        Route::post('/order-store',[OrderController::class, 'store'])->name('order.store');
        Route::get('/order-detais/{id}',[OrderController::class, 'orderDetails'])->name('order.details');
        Route::post('/order-update/{id}',[OrderController::class, 'updateOrder'])->name('update.order');
       




        //Product Image..........................................................................
        Route::get('/product-image',[ProductController::class, 'image'])->name('image.list');
        Route::get('/image-create',[ProductController::class, 'imageCreate'])->name('image.create');
        Route::post('/image-store',[ProductController::class, 'imageStore'])->name('image.store');
        // Route::get('/product-edit/{id}', [ProductController::class,'edit'])->name('image.edit');
        // Route::put('/product-update/{id}', [ProductController::class,'update'])->name('image.update');
        // Route::get('/product-show/{id}', [ProductController::class,'show'])->name('image.show');
        // Route::get('/product-delete/{id}',[ProductController::class,'delete'])->name('image.delete');


        Route::get('/reports',[ReportController::class,'reportList'])->name('reports.list');
        Route::get('/product-reports-by-time',[ReportController::class,'getByTimeReport'])->name('getByTimeReport');
        Route::get('/search-report',[ReportController::class,'searchByTime'])->name('report.search');






});
//=========================================================================================

//Frontend Start..............................................................
Route::get('/',[FrontendController::class, 'master'])->name('home');
Route::get('/card-show',[FrontendController::class, 'cardShow'])->name('card.show');
Route::get('/search',[FrontendController::class,'search'])->name('search');
Route::get('/get-by-type/{type}',[FrontendController::class,'getByType'])->name('get.by.product');
Route::get('/card',[FrontendController::class,'card'])->name('view.card');
Route::post('/addToCard/{id}',[FrontendController::class,'addToCard'])->name('add.to.card');
Route::get('/remove-Item/{id}',[FrontendController::class,'removeItem'])->name('remove.item');
Route::get('/clear-cart',[FrontendController::class,'clearCart'])->name('clear.cart');
Route::get('/search-by-price',[FrontendController::class,'searchByPrice'])->name('search.by.price');








//Registration................................................................
Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::get('/frontend_login',[RegistrationController::class,'login'])->name('frontend.login');
Route::post('/customer-store',[CustomerController::class,'customerStore'])->name('customer.store');
Route::post('/doligin',[CustomerController::class,'dologin'])->name('customer.login');



Route::group(['middleware'=>'frontendAuth'],function(){

        Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');
        Route::get('/checkout',[CustomerController::class,'checkOut'])->name('checkout');
        Route::post('/place-order',[OrderController::class,'placeOrder'])->name('place.order');
        Route::get('/customer-profile',[FrontendController::class, 'customerProfile'])->name('customer.profile');
        Route::get('/customer-profile-edit',[FrontendController::class, 'customerEdit'])->name('customer.edit');
        Route::post('/customer-profile-edit/{id}',[FrontendController::class, 'customerUpdate'])->name('customer.update');
        Route::get('/my-order/{id}',[FrontendController::class, 'myOrder'])->name('my.order');
        Route::get('/my-order-details/{id}',[FrontendController::class, 'orderDetails'])->name('my.order.details');
        // Route::get('/order-detais/{id}',[OrderController::class, 'orderDetails'])->name('order.details');


        
       
    
});



// Product....................................................................
Route::get('/all-products',[WebsiteProductController::class,'view_product'])->name('frontend.product');
Route::get('/products-show/{id}',[WebsiteProductController::class,'show'])->name('frontend.show');
Route::get('/category-wise-product/{id}',[WebsiteProductController::class,'categoryWiseProduct'])->name('category.product');
Route::get('/filter-by-type/{type}',[WebsiteProductController::class,'filteByType'])->name('filter.by.product');



//Contact......................................................................................
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');




