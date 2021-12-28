<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use app\Models\Post;
use App\Models\User;
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
    return view('home', [
        "title" => "home",
        'active' => 'home'

    ]);   
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",   
        'active' => 'about',     
        "nama" => "Muhamad Odhie Prasetio",
        "email" => "tiotio179@gmail.com",
        "gambar" => "odhie.jpg"

    ]);   
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories',[
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){ return view('dashboard.index');} )->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
























Route::get('/aboutralavel', function () {
    return view('welcome');
});






// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'active' => 'categories',        
//         'title' => "Post by Category : $category->nama",
//         'posts' => $category->posts->load('category', 'author')
//     ]);});

//     Route::get('/authors/{author:username}', function (User $author) {
//         return view('posts', [

//             'active' => 'posts',
//             'title' => "Post By Author : $author->name",
//             'posts' =>$author->posts->load('category', 'author')
//         ]);
//     });