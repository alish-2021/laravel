<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePostsController extends Controller
{
    public function createPost(Request $request){
        return view('create', [
            'pageTitle'=> 'Create Page',

        ]);
    }
}
 
