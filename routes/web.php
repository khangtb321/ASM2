<?php

use App\Http\Controllers\UserController;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
    $products = Product::query()->latest('id')->with('category')->limit(30)->get();
    return view('welcome',compact('products'));
})->name('welcome');

// CHi tiết sản phẩm
Route::get('product/{slug}', [\App\Http\Controllers\ProductController::class, 'detail'])
    ->name('product.detail');

// Mua hàng
Route::get('cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('cart/list', [\App\Http\Controllers\CartController::class, 'list'])->name('cart.list');
Route::post('order/add', [\App\Http\Controllers\OrderController::class, 'add'])->name('order.add');



//client
Route::get('/client', function () {
    $categories = Category::all();
    $products = Product::query()->latest('id')->limit(5)->get();
    return view('client.index', compact('categories', 'products'));
})->name('index');

    

Route::get('show/{id}',function($id){
    $categories = Category::all();
    
    return view('client.show',compact('categories','id'));
})->name('show');



Route::get('/products',function(){
    $categories = Category::all();
    return view('client.products',compact('categories'));
});
// Route::get('/show',function(){
//     $categories = Category::all();
//     return view('client.login',compact('categories'));
// });

Route::get('/register',function(){
    $categories = Category::all();
    return view('client.register',compact('categories'));
});

// Route::get('/client/index', [Home::class, 'index'])->name('client.index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('login.post');
// Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');





