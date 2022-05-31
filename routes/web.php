<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Customer;


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

Route::get('/hello', [PageController::class, 'index']);

                                                //localhost/posts

Route::controller(PostController::class)->group(function (){
    Route::prefix('posts')->group(function() {
        Route::get('/', 'index')->name('posts.index');
        Route::get('/create', 'create')->name('posts.create');
        Route::post('/create', 'store')->name('posts.store');
        Route::get('/show{post}', 'show')->name('posts.show');
        Route::get('/edit{post}', 'edit')->name('posts.edit');
        Route::post('/edit/{post}', 'update')->name('posts.update');
        Route::get('/destroy/{post}', 'destroy')->name('posts.destroy');
    });
});

                                                //localhost/customers

// Route::get('/customers', function () {
//     $customers = Customer::get();
//     dd($customers);
// });

// Route::get('/customers', [CustomerController::class, 'index']);

Route::controller(CustomerController::class)->group(function (){
    Route::prefix('customers')->group(function() {
        Route::get('/', 'index')->name('customers.index');
        Route::get('/create', 'create')->name('customers.create');
        Route::post('/create', 'store')->name('customers.store');
        Route::get('/show{customer}', 'show')->name('customers.show');
        Route::get('/edit{customer}', 'edit')->name('customers.edit');
        Route::post('/edit/{customer}', 'update')->name('customers.update');
        Route::get('/destroy/{customer}', 'destroy')->name('customers.destroy');
    });
});

Route::controller(CommentController::class)->group(function () {
    Route::prefix('comments')->group(function () {
        Route::post('/store', 'store')->name('comments.store');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
