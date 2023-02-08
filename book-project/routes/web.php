<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Product;

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

Route::view('/shop', 'landing');

Route::view('/add-products', 'add-products');
Route::post('/add-products', [ProductController::class, 'store']);

Route::get('/products', [ProductController::class, 'getProducts']);
Route::get('/products/{id}', [ProductController::class, 'findById']);

Route::post('/delete-product', [ProductController::class, 'deleteProduct']);

Route::post('/edit-product', [ProductController::class, 'editProduct']);

Route::post('/add-comment', [CommentController::class, 'store']);

Route::get('/books', function () {
    return view('books', [
        "books"=>Book::all()
    ]);
});