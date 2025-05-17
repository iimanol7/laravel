<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '';
});

Route::get('/prueba', function () {
    // Post::create([
    //     'title' => 'Mi primer post',
    //     'content' => 'Contenido del post',
    // ]);

    // Tag::create([
    //     'name' => 'Laravel',
    // ]);

    // BUSCAR UN POST
    // $post = Post::find(1);

    // ASIGNAR UN TAG AL POST
    // $post->tags()->attach(1);

    // ASIGNAR VARIOS TAGS AL POST
    // $post->tags()->attach([1, 2, 3]);

    // TAMBIEN SE PUEDE UTILIZAR 'SYNC' (reemplaza los anteriores)
    // $post->tags()->sync([1, 2]);

    // ELIMINAR TAGS DEL POST
    // $post->tags()->detach(1);

    // BUSCAR UN POST
    // $post = Post::find(1);
    // DEVOLVER LOS TAGS ASIGNADOS AL POST
    // return $post->tags;

    // BUSCAR UN TAG
    // $tag = Tag::find(1);
    // DEVOLVER LOS POSTS ASIGNADOS AL TAG
    // return $tag->posts;

    // $post = Post::find(1);
    // $post->tags()->attach([1, 2]);
    // $post = Post::where('id', 1)->with('tags')->get();
    // return $post;
});