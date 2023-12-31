<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//route resource
Route::resource('/home', \App\Http\Controllers\HomeController::class);
Route::resource('/produk', \App\Http\Controllers\ProdukController::class);
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.show');
Route::post('/produk/{id}', [ProdukController::class, 'pesanan'])->name('produk.pesanan');