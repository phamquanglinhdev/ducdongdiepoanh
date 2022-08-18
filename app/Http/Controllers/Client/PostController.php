<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function render($id=1){
        $posts = Post::get();
        $post = Post::find($id);
        return view("clients.posts",["post"=>$post,"posts"=>$posts]);
    }
    public function list(){
        $posts = Post::limit(6)->orderby("updated_at","DESC")->get();
        $data = null;
        foreach ($posts as $post){
            $data.=view("components.post-component",["post"=>$post]);
        }
        return view("clients.posts-list",["data"=>$data]);
    }
    public function loadComponent(Request $request){
        $posts = Post::limit($request->limit)->orderby("updated_at","DESC")->get();
        $data = null;
        foreach ($posts as $post){
            $data.=view("components.post-component",["post"=>$post]);
        }
        return $data;
    }
}
