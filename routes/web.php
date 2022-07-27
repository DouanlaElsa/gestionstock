<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post("/auth/logout", [AuthController::class, 'logout'])->name('logout');
Route::get("/auth/login", [AuthController::class, 'getLogin'])->name('login');
Route::post("/auth/login", [AuthController::class, 'postLogin'])->name('auth.postLogin');
Route::get("/auth/register", [AuthController::class, 'getRegister'])->name('auth.getRegister');
Route::post("/auth/register", [AuthController::class, 'postRegister'])->name('auth.postRegister');

Route::get("/home", [AuthController::class, 'homePage']);


Route::group([ 'middleware'=>['auth']

],
function(){
    Route::get("/products", [ProductController::class, 'index'])->name('products.index');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/{id}/show', [ProductController::class, 'show'])->name('products.show');
    Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get("/dashboard",[DashboardController::class, 'index'])->name('dashboard');
    
    
}
);

