<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function get_all_posts()
    {
        $posts= Posts::orderby('created_at','desc')->paginate(5);
        return view('pages.home')->withPosts($posts);
    }

}
