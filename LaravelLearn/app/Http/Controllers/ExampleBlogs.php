<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleBlogs extends Controller
{
    public function about()
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is body a text1',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'this is body a text1',
                'status' => 1
            ],
            [
                'title' => 'Title three',
                'body' => 'this is body a text1',
                'status' => 1
            ],
            [
                'title' => 'Title four',
                'body' => 'this is body a text1',
                'status' => 0
            ],
            [
                'title' => 'Title five',
                'body' => 'this is body a text1',
                'status' => 1
            ],
            [
                'title' => 'Title six',
                'body' => 'this is body a text1',
                'status' => 0
            ],
        ];
        return view('about.about')->with("blogs", $blogs);
    }
}
