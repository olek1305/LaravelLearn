<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Posts;
use App\Models\Tag;
use App\Models\User;
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

        // $post = Post::where('id', 5)->first();
        // $post->title = 'New Title V555';
        // $post->description = 'this is a new description';
        // $post->save();

        // dd('success');


        // $post = Posts::create([
        //     'title' => 'this is from mass assign',
        //     'description' => 'this is a description from mass assign',
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 5
        // ]);

        // dd('success');

        // $post = Posts::find(5)->update([
        //     'title' => 'this is from mass assign',
        //     'description' => 'this is a description from mass assign',
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 5
        // ]);


        //with softdelete
        // Posts::where('id', 1)->delete();


        //restore softdelete
        // return Posts::withTrashed()->find(2)->restore();

        //force to delete
        // Posts::withTrashed()->find(2)->forceDelete();
        // return Posts::all();

        // data download from User.php
        // $users = User::all();
        // return view('home')->with('users', $users);

        // $addresses = Address::all();
        // return view('home')->with('addresses', $addresses);

        $post = Posts::first();

        $tag = Tag::first();

        $post->tags()->attach($tag);
    }
}
