<?php

use App\Http\Controllers\ProdukController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ProdukController::class, 'index']);
Route::post('insert', [ProdukController::class, 'store'])->name('produk.store');
Route::get('edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('edit/now/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::post('delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
