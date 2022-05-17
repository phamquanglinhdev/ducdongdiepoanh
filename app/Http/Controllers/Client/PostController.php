<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function render($id){
        $posts = Post::get();
        $post = Post::find($id);
        return view("clients.posts",["post"=>$post,"posts"=>$posts]);
    }
}
