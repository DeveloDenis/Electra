<?php

use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\NewArivalsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PolicyController as AdminPolicyController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\specificationController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\TermsController as AdminTermsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as InformationUsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\naavbar;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ContactUs;
use Livewire\Livewire;

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





   Route::group(['middleware'=>'PreventBackHistory'],function(){


        

             //User view 
Route::get('/', [DashboardController::class, 'home'])->name('user.menu');

Route::get('/coloections', [DashboardController::class, 'colections'])->name('user.collections');

Route::get('/register',[UserController::class, 'viewRegister'])->name('user.register');

Route::get('/login',[UserController::class, 'viewLogin'])->name('user.login');

Route::get('/prehome',[DashboardController::class, 'prehome'])->name('prehome')->middleware('auth');

Route::get('/shop',[DashboardController::class, 'viewShop'])->name('user.shop');

Route::get('/product/{category_id}/view',[DashboardController::class, 'viewProduct'])->name('product.view');

Route::get('/viewprofile',[UserController::class, 'viewprofile'])->name('user.profile')->middleware('auth');

Route::get('/preedit',[UserController::class, 'preedit'])->name('preedit')->middleware('auth');

Route::get('/user/{user}/edit',[UserController::class, 'edit'])->name('user.edit')->middleware('auth');

Route::get('/user/verify',[UserController::class,'verify'])->name('user.verify');

Route::get('/user/forgot',[UserController::class, 'showForgotForm'])->name('forgot.password.form');



Route::get('/user/reset/{token}',[UserController::class, 'showResetForm'])->name('user.reset');

Route::get('user/{category_slug}/shop-category/',[DashboardController::class, 'shopCategory'])->name('shop.category');

Route::get('view/{product_id}/product',[DashboardController::class, 'viewProduct'])->name('view.product');

Route::get('/cart/view',[CartController::class, 'viewCart'])->name('view.cart')->middleware('auth');

Route::get('product/checkout',[CheckoutController::class, 'viewCheckout'])->name('checkout')->middleware('auth');

Route::get('/thank-you',[CheckoutController::class, 'tanks'])->name('thank-you');


Route::get('/orders',[OrderController::class, 'view'])->name('orders.view')->middleware('auth');

Route::get('order/{orderId}',[OrderController::class, 'show'])->name('orders.show')->middleware('auth');

Route::get('/new-arrivals',[DashboardController::class, 'newArrival'])->name('new.arival');

Route::get('/featured-products',[DashboardController::class,'featuredProducts'])->name('feature.products');

    Route::get('view/search',[SearchController::class, 'viewSearch'])->name('view.search');

Route::get('password/change',[UserController::class, 'ChangepV'])->name('view.changePassword')->middleware('auth');

Route::get('/contact_us',[ContactUsController::class, 'view'])->name('contact-us');

Route::get('/terms&conditions',[TermsController::class, 'view'])->name('terms&conditions');

Route::get('/policy',[PolicyController::class, 'view'])->name('policy');

Route::get('/benefits',[DashboardController::class, 'benefits'])->name('benefits');

Route::get('/discount',[DashboardController::class, 'discount'])->name('discount');

Route::get('/return',[DashboardController::class, 'return'])->name('return');

//User functions

Route::post('/register/post',[UserController::class, 'register'])->name('register.post');
Route::post('/login/post',[UserController::class, 'login'])->name('login.post');
Route::post('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::put('/user/{user}/update',[UserController::class, 'update'])->name('update.profile')->middleware('auth');
Route::post('/user/resetLink',[UserController::class, 'sendResetLink'])->name('forgot.password.link');
Route::post('/user/password/reset',[UserController::class, 'resetPassword'])->name('reset.password.form');
Route::post('/add/{product_id}/cart',[ProductController::class, 'addCartProduct'])->name('add.cart')->middleware('auth');
Route::delete('delete/{cart}', [CartController::class, 'deleteCart'])->name('delete.cart')->middleware('auth');
Route::get('search',[SearchController::class, 'search'])->name('search.product');
Route::post('chage/password',[UserController::class, 'changeP'])->name('changePass')->middleware('auth');
Route::post('add-rating',[RatingController::class, 'add'])->name('rating.add')->middleware('auth');
Route::post('contact/admin',[ContactUsController::class, 'create'])->name('send.contact');


   

    

//Admin view

Route::get('/admin/menu',[AdminDashboardController::class, 'index'])->name('admin.menu')->middleware('auth');
Route::get('admin/brand',[BrandsController::class, 'index'])->name('admin.brands')->middleware('auth');
Route::get('/brand/{brand}/edit',[BrandsController::class,'edit'])->name('brands.edit')->middleware('auth');
Route::get('/categories',[CategoryController::class, 'index'])->name('admin.category')->middleware('auth');
Route::get('/category/create',[CategoryController::class, 'create'])->name('admin.category.create')->middleware('auth');
Route::get('category/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
Route::get('/admin/createproduct',[ProductController::class, 'ACP'])->name('admin.product.create')->middleware('auth');
Route::get('view/product',[ProductController::class, 'viewproducts'])->name('view.products')->middleware('auth');
Route::get('product/{products}/edit',[ProductController::class, 'edit'])->name('edit.product')->middleware('auth');
Route::get('/colors',[ColorController::class, 'colorview'])->name('view.color')->middleware('auth');
Route::get('colors/create',[ColorController::class, 'colorCreate'])->name('create.color')->middleware('auth');
Route::get('colors/{color}/edit',[ColorController::class, 'colorEdit'])->name('color.edit')->middleware('auth');
Route::get('/users/information',[InformationUsersController::class, 'usersInformation'])->name('users.informations')->middleware('auth');
Route::get('/users/information/admin',[InformationUsersController::class, 'adminInformation'])->name('admin.informations')->middleware('auth');
Route::get('/user/information',[InformationUsersController::class, 'userInformation'])->name('user.informations')->middleware('auth');
Route::get('/view/tasks',[TaskController::class, 'view'])->name('tasks')->middleware('auth');

Route::get('/filter',[OrdersController::class, 'filter'])->name('filter')->middleware('auth');
Route::get('orders/view',[OrdersController::class, 'viewTotal'])->name('admin.orders.view')->middleware('auth');
Route::get('orders/view/today',[OrdersController::class, 'viewToday'])->name('admin.orders.today.view')->middleware('auth');
Route::get('orders/view/month',[OrdersController::class, 'viewMonth'])->name('admin.orders.month.view')->middleware('auth');
Route::get('orders/view/year',[OrdersController::class, 'viewYear'])->name('admin.orders.year.view')->middleware('auth');

Route::get('admin/{orderId}/view',[OrdersController::class, 'show'])->name('admin.orders.show')->middleware('auth');
Route::get('invoice/{orderId}', [OrdersController::class, 'viewInvoice'])->name('invoice.view')->middleware('auth');
Route::get('invoice/{orderId}/generate',[OrdersController::class, 'generateInvoice'])->name('invoice.generate')->middleware('auth');
Route::get('/settings',[SettingController::class, 'view'])->name('settings')->middleware('auth');
Route::get('/users/create',[InformationUsersController::class, 'createUser'])->name('user.create')->middleware('auth');
Route::get('/user/{userId}/e',[InformationUsersController::class, 'editUser'])->name('user.edit.admin')->middleware('auth');
Route::get('/out-of-stock',[AdminDashboardController::class, 'outOfStock'])->name('outOfStock')->middleware('auth');
Route::get('/specification/{productId}/create',[specificationController::class, 'specification'])->name('specification_create')->middleware('auth');
Route::get('/specification/{productId}/edit',[specificationController::class, 'edit'])->name('specification.edit')->middleware('auth');
Route::get('/terms-information',[AdminTermsController::class, 'view'])->name('terms-information')->middleware('auth');
Route::get('/policy-create',[AdminPolicyController::class,'view'])->name('policy-information')->middleware('auth');

//Admin functions

Route::post('create/brand',[BrandsController::class, 'create'])->name('brands.create')->middleware('auth');
Route::delete('/brand/{brands}/delete',[BrandsController::class, 'delete'])->name('brands.delete')->middleware('auth');
Route::put('/brand/{brands}/update',[BrandsController::class, 'update'])->name('brands.update')->middleware('auth');
Route::post('/category/post',[CategoryController::class, 'make'])->name('admin.make.category')->middleware('auth');
Route::delete('/category/{categories}/delete',[CategoryController::class, 'deleteCategory'])->name('delete.category')->middleware('auth');
Route::put('/category/{category}/update',[CategoryController::class, 'updateCategory'])->name('update.category')->middleware('auth');
Route::post('product/post',[ProductController::class, 'createProduct'])->name('product.post')->middleware('auth');
Route::get('productImage/{product_image_id}/delete',[ProductController::class, 'deleteProductImage'])->name('productImage.delete')->middleware('auth');
Route::put('product/{product_id}/update',[ProductController::class, 'updateProduct'])->name('update.product')->middleware('auth');
Route::get('product/{product_id}/delete',[ProductController::class, 'deleteProduct'])->name('delete.product')->middleware('auth');
Route::post('color/create/post',[ColorController::class, 'colorPost'])->name('post.color')->middleware('auth');
Route::put('color/{color}/update',[ColorController::class, 'colorUpdate'])->name('update.color')->middleware('auth');
Route::get('color/{color}/delete',[ColorController::class, 'colorDelete'])->name('color.delete')->middleware('auth');
Route::get('colorProduct/{product_color_id}/delete',[ProductController::class, 'deleteProductColor'])->name('product.color.delete')->middleware('auth');
Route::get('admin/{users_id}/delete',[InformationUsersController::class, 'delete'])->name('user.delete')->middleware('auth');
Route::get('users/{users_id}/ban',[InformationUsersController::class, 'banUser'])->name('user.ban')->middleware('auth');
Route::get('users/{user_id}/unban',[InformationUsersController::class, 'unBanUser'])->name('user.unban')->middleware('auth');


Route::put('orders_status/{orderId}/update',[OrdersController::class, 'update'])->name('order.update')->middleware('auth');
Route::post('set/settings',[SettingController::class, 'setSettings'])->name('set.settings')->middleware('auth');
Route::post('user/create',[InformationUsersController::class, 'addUser'])->name('user.add')->middleware('auth');
Route::put('user/{userId}/u',[InformationUsersController::class, 'updateUser'])->name('user.update1')->middleware('auth');
Route::get('user/{userId}/d',[InformationUsersController::class, 'deleteUser'])->name('user.delete1')->middleware('auth');
Route::get('/admin/{orderId}/mail',[OrdersController::class, 'orderMail'])->name('orders.mail')->middleware('auth');
Route::post('/specification/store',[specificationController::class, 'createSpecification'])->name('create.specification')->middleware('auth');
Route::put('/specifications/{productId}/update',[specificationController::class, 'updateSpecification'])->name('update.specification')->middleware('auth');
Route::post('/terms-post',[AdminTermsController::class, 'create'])->name('terms-post')->middleware('auth');
Route::post('/policy-post',[AdminPolicyController::class, 'create'])->name('policy-post')->middleware('auth');


});



