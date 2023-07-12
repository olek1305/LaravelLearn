<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return $posts = Posts::all();
    }
}
