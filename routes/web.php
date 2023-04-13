<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HoadonsController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Response;


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
//route backend
Route::get('/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix' => 'categories', 'middleware' => 'user'], function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::post('/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::get('/destroy/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
});
// Route::prefix('categories')->group(function () {
//     Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');
//     Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
//     Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
//     Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
//     Route::post('/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
//     Route::get('/destroy/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
// });
Route::group(['prefix' => 'rooms', 'middleware' => 'user'], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('rooms.index');
    Route::get('/create', [ProductsController::class, 'create'])->name('rooms.create');
    Route::post('/store', [ProductsController::class, 'store'])->name('rooms.store');
    Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('rooms.edit');
    Route::post('/update/{id}', [ProductsController::class, 'update'])->name('rooms.update');
    Route::get('/destroy/{id}', [ProductsController::class, 'destroy'])->name('rooms.destroy');
    Route::get('/detail/{id}', [ProductsController::class, 'detail'])->name('rooms.detail');
});
Route::group(['prefix' => 'sale', 'middleware' => 'user'], function () {
    Route::get('/', [SaleController::class, 'index'])->name('sale.index');
    Route::get('/create', [SaleController::class, 'create'])->name('sale.create');
    Route::post('/store', [SaleController::class, 'store'])->name('sale.store');
    Route::get('/edit/{id}', [SaleController::class, 'edit'])->name('sale.edit');
    Route::post('/update/{id}', [SaleController::class, 'update'])->name('sale.update');
    Route::get('/destroy/{id}', [SaleController::class, 'destroy'])->name('sale.destroy');
});
Route::group(['prefix' => 'banner', 'middleware' => 'user'], function () {
    Route::get('/', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/destroy/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
});
Route::prefix('hoadon')->group(function () {
    Route::get('/', [HoadonsController::class, 'index']);
});

require __DIR__ . '/auth.php';
//route frontend
Route::prefix('')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
});
Route::group(['prefix' => 'checkout'], function () {
    Route::get('/', [HoadonsController::class, 'form'])->name('checkout');
    Route::post('/', [HoadonsController::class, 'submit_form'])->name('checkout');
});

// Route::get('/create', [BannerController::class, 'create'])->name('user.create');
// Route::post('/store', [BannerController::class, 'store'])->name('user.store');
// Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('user.edit');
// Route::post('/update/{id}', [BannerController::class, 'update'])->name('user.update');
// Route::get('/destroy/{id}', [BannerController::class, 'destroy'])->name('user.destroy');