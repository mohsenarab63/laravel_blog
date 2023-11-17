<?php

use App\Models\Post;
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
    return view('welcome');
});
Route::get('/posts/create', function () {
    return view('posts.create');
});
Route::post('/posts/', function () {
    $title = request()->input('title');
    $body = request()->input('body');
    $data= ['title'=>$title,'body'=>$body];
    Post::insert($data);
    return redirect('/posts');
});
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts.index',['posts'=>$posts]) ;
});
