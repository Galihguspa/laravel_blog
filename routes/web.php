<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
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
        "title" => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Galih Gustika P",
        "email" => "galihdrm@gmail.com",
        "image" => "galih.jpg"
    ]);
});

/*
Route::get('/blog', function () {
    
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author"=> "Galih Gustika P",
            "body"  => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio minus fugit corporis modi voluptatibus natus assumenda consectetur temporibus sapiente, illum expedita est distinctio tempora, atque accusantium delectus eum dolor maiores a provident blanditiis. Mollitia facilis odio officiis soluta voluptatum aspernatur delectus perspiciatis iste maxime modi, accusantium vel maiores esse quos suscipit deleniti totam odit quibusdam architecto eum sequi provident natus? Pariatur voluptate dolor ad atque doloribus odio magni cupiditate dolorum architecto, fugit, accusantium tenetur assumenda maiores consectetur molestias expedita ipsam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author"=> "Andi Firmansyah",
            "body"  => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui adipisci tempore dignissimos quae consequuntur voluptates incidunt. Fugiat nisi sit totam! Eius error explicabo, exercitationem aut, quod assumenda quidem magnam deserunt natus enim hic porro quae! Similique non molestias vel ipsa eaque nemo dolore accusamus vitae soluta maxime illo ratione necessitatibus numquam eligendi, est placeat saepe asperiores, maiores dignissimos fuga sed! Sapiente ipsa optio quidem quae ipsum placeat reprehenderit, eveniet, deleniti doloremque quisquam atque rem necessitatibus? Odit delectus reprehenderit aspernatur odio rerum quaerat perspiciatis ut qui, dolorem fugit molestiae velit harum provident dolor vel! Itaque blanditiis reiciendis neque laboriosam quisquam!"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
*/

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories',function(){
    return view('categories',[
        "title"      => "Post Categories",
        "active" => "categories",
        "categories" => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts ',[
        "title" => "Posts By Category : $category->name ",
        "active" => "categories",
        "posts" => $category->posts->load('author','category'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        "title" => "Posts By Author : $author->name ",
        "posts" => $author->posts->load('category','author'),
    ]);
});