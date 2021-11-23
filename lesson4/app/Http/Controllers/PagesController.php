<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function postsPage(){

        $posts = Post::all();
    
        return view('posts', [
            'pageTitle'=> "Posts Page",
            'posts'=> $posts,
        ]);
    }

    public function postPage($id){
        
        $post = Post::find($id);

        if(!$post){
            return abort(404);
        }

        return view('post', [
            'pageTitle'=> $post['title'],
            'post'=> $post,
        ]);
    }

}
