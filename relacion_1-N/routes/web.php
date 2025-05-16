<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '';
});

Route::get('/prueba', function () {
    // Post::create([
    //     'title' => 'titulo',
    //     'content' => 'contenido',
    // ]);
    
    //  Comment::create([
    //     'content' => 'contenido',
    //     'post_id' => 1,
    // ]);

    //BUSCAMOS UN POST
    // $post = Post::find(1);
    //RETORNAMOS LOS COMENTARIOS QUE TIENE ASIGNADOS
    // return $post->comments;

    // //BUSCAMOS UN POST JUNTO A LOS COMENTARIOS QUE TIENE ASIGNADOS
    // $post = Post::where('id', 1)->with('comments')->get();
    // return $post;

    //BUSCAMOS UN COMENTARIO
    // $comment = Comment::find(1);
    //RETORNAMOS EL USUARIO AL QUE PERTENECE EL COMENTARIO
    // return $comment->post;

    //BUSCAMOS UN COMENTARIO JUNTO A EL POST AL QUE PETENECE
    // $comment = Comment::where('id', 1)->with('post')->get();
    // return $comment;
});