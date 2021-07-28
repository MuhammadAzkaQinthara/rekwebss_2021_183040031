<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "name" => "Muhammad Azka Qinthara",
        "email" => "m.azka.qinthara@gmail.com",
        "image" => "img.jpg"    
    ] );
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Azka Qinthara",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo optio mollitia enim repellat id eius qui, veniam voluptates minus impedit quod esse sed quasi est ut assumenda tempore nostrum? Quod necessitatibus sed ducimus eius eveniet corporis tempora voluptas ratione a ex, temporibus vitae, labore asperiores alias eaque, suscipit voluptatem veritatis porro sequi culpa dolorum sit? Tempore, voluptate sint laudantium esse nesciunt eaque autem porro doloremque dicta consectetur magni reiciendis quia blanditiis eveniet vel ex alias! Nisi magni aliquid aspernatur vitae."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizky aji",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quisquam quos illum maxime maiores? Commodi aut recusandae labore ut cumque. Similique impedit assumenda officiis numquam iste iusto, temporibus, voluptatum magnam maiores repudiandae animi enim dicta unde hic voluptatem sit totam. Aperiam dolores facilis exercitationem, quasi ab neque? Delectus, eaque iusto vero similique assumenda amet ut minima voluptates debitis totam est facere dolorum possimus a distinctio dolorem, id laudantium at? Earum voluptatem, omnis explicabo a deserunt, harum accusamus mollitia numquam soluta ipsam expedita maxime est animi! Esse doloribus deserunt numquam fuga, accusamus recusandae pariatur ex, quia cum dolorum iusto mollitia iste."
        ]
    ];
    
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Azka Qinthara",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo optio mollitia enim repellat id eius qui, veniam voluptates minus impedit quod esse sed quasi est ut assumenda tempore nostrum? Quod necessitatibus sed ducimus eius eveniet corporis tempora voluptas ratione a ex, temporibus vitae, labore asperiores alias eaque, suscipit voluptatem veritatis porro sequi culpa dolorum sit? Tempore, voluptate sint laudantium esse nesciunt eaque autem porro doloremque dicta consectetur magni reiciendis quia blanditiis eveniet vel ex alias! Nisi magni aliquid aspernatur vitae."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizky aji",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quisquam quos illum maxime maiores? Commodi aut recusandae labore ut cumque. Similique impedit assumenda officiis numquam iste iusto, temporibus, voluptatum magnam maiores repudiandae animi enim dicta unde hic voluptatem sit totam. Aperiam dolores facilis exercitationem, quasi ab neque? Delectus, eaque iusto vero similique assumenda amet ut minima voluptates debitis totam est facere dolorum possimus a distinctio dolorem, id laudantium at? Earum voluptatem, omnis explicabo a deserunt, harum accusamus mollitia numquam soluta ipsam expedita maxime est animi! Esse doloribus deserunt numquam fuga, accusamus recusandae pariatur ex, quia cum dolorum iusto mollitia iste."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
