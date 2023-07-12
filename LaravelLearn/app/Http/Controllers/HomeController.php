<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        //THERE CODES IN COMMENT WERE IN TRAINING

        // return Post::all(); // DB::table('posts)->get();

        // $post = Post::FindOrFail(32);
        // return $post->title;

        // $posts = [];
        // $posts = Post::all();
        // return view('home')->with('posts', $posts);

        // $post = new Post();
        // $post->title = 'post 4';
        // $post->description = 'this is a test description';
        // $post->status = 1;
        // $post->publish_date = date('Y-m-d');
        // $post->user_id = 5;

        // $post->save();
        // dd('success');



        // $post = Post::find(16);
        // $post->title = 'This is a new title';
        // $post->save();

        // dd('success');

        
    }
}
