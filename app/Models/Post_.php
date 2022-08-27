<?php

namespace App\Models;
/*
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}

*/

class Post 
{
   private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}