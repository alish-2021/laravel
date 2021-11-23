<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class PageController extends Controller
{
   public function blogPage(){

      $posts = Article::all();

      return view('blog', [
         "pageName"=> "Blog Page",
         "posts"=> $posts,
      ]);
   }

   public function postPage($id){
      $post = Article::find($id);

      if(!$post){
         return abort(404);
      } 
      
      return view('post', [
         "post"=> $post,
         "pageName"=> $post['title'], 
      ]);
   }

   public function postUpdate($id){ // Для редактирование поста
      $post = Article::find($id);
      if(!$post){
         return abort(404);
      }
      
      return view('update', [
         "pageName" => $post['title'],
         "post"=> $post,
      ]);
   }

}
