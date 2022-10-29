<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Adrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat fugit repellendus veniam perferendis vitae debitis! Ipsum nihil mollitia omnis nesciunt dolore quidem necessitatibus tempora deleniti suscipit tempore eius recusandae fugiat exercitationem repellendus quaerat, voluptatum eligendi itaque deserunt? Repudiandae laborum esse ab architecto vitae maxime, excepturi consequatur quisquam, voluptatem aliquid provident quas doloribus. Tenetur accusamus quae eveniet cumque ut tempore, itaque quos labore a officia mollitia nam, architecto, reiciendis dignissimos iusto omnis? Officiis porro iste deserunt, quia quaerat explicabo impedit!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Indra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores minus ea, eveniet, doloribus iste provident ipsam ex voluptatibus repudiandae vel enim corporis totam corrupti pariatur laudantium quia saepe repellat omnis ipsa a fugiat nam mollitia inventore? Odit cupiditate deleniti odio ea quae molestiae voluptatibus cum eveniet! Expedita reiciendis harum blanditiis minus nesciunt quaerat consequuntur, dolores eaque rem est ipsam, adipisci quod maiores quasi a neque, dicta eum quos! Labore culpa reprehenderit minima eveniet doloremque sint provident quas perspiciatis dolore velit quaerat sed ratione molestias nostrum harum et tempora, vitae adipisci quis. Tempore dicta error et fuga saepe ipsa neque?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
