<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PostsController extends Controller
{
    public function store(Request $request){
        $data = $request->only(['title', 'body']);
        
        $article = Article::create([
            'title'=> $data['title'],
            'body'=> $data['body'],
        ]);


        if($article){
            return redirect()->back();
        }
    }

    public function destroy(Request $request){
        $article = Article::find($request->id);

        if(!$article){
            return abort(404);
        };

        $article->delete();
        return redirect()->back();

    }
    public function update(Request $request){

        $data = $request->only(['title', 'body', 'id']);
        $article = Article::find($data['id']);

        if(!$article){
            return abort(404);
        }

        $article->title = $data['title'];
        $article->body = $data['body'];

        $article->save();

        return redirect()->route('home');  // Редирект назад на главную
        // return redirect()->to('/');
    }

}
