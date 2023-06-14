<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ch
*/

Route::get('/home', function () {
    return view('client.layout.index');
});

//edit profile
Route::get('/profile/edit',[Account::class, 'edit'] )->name('profile.edit');
Route::post('/profile/update', [Account::class, 'update'])->name('profile.update');


Route::get('/game/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/game/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/game:delete{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/game/edit{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/game/update{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/game/show{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/game/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/game/home', [ProductController::class, 'home'])->name('product.home');
Route::get('/', function () {
    return view('clien.layout.index');
});

Route::get('/add-to-cart/{id}', [HomeController::class, 'addToCart']);
Route::get('/cart', [HomeController::class, 'cart'])->name('pages.cart');
Route::post('/update-cart/{id}', [HomeController::class, 'update'])->name('update-cart');
Route::delete('/remove-from-cart/{id}', [HomeController::class, 'remove']);

//fogot password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('/', [Account::class, 'store'])->name('auth.register');
Route::get('/register', [Account::class, 'show'])->name('welcome.register');
Route::get('/', [Account::class, 'showLogin'])->name('welcome.login');
Route::get('/logout', [Account::class, 'logout'])->name('logout');
Route::post('/index', [Account::class, 'login'])->name('auth.login');

