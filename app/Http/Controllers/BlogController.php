<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;

class BlogController extends Controller
{

    public function Show($slug)
    {

        $posts=Posts::select(['id','title','slug','content',
            'categories','tags','image','tag_en_name','created_at'])->where('slug',$slug)->first();
        return view('pages.blog_post')->withPosts($posts);
    }

    public function Sport($sport)
    {
               $posts=Posts::select(['id','title','slug','content',
            'categories','tags','image','tag_en_name','created_at'])->where('categories',$sport)->get();
        return view('pages.show_categories')->withPosts($posts);

    }

        public function Policy($policy)
        {
            $posts=Posts::select(['id','title','slug','content',
            'categories','tags','image','tag_en_name','created_at'])->where('categories',$policy)->get();
            return view('pages.show_categories')->withPosts($posts);

        }

    public function Culture($culture)
    {
       $posts=Posts::select(['id','title','slug','content',
       'categories','tags','image','tag_en_name','created_at'])->where('categories',$culture)->get();
        return view('pages.show_categories')->withPosts($posts);

    }
    public function Tags($tag_en_name)
    {
        $posts=Posts::select(['id','title','slug','content',
            'categories','tags','image','tag_en_name','created_at'])->where('tag_en_name',$tag_en_name)->get();
        return view('pages.show_categories')->withPosts($posts);
    }

    public function Contacts()
    {
        return view('pages.contacts');
    }

    public function About()
    {
        return view('pages.o_project');
    }


}
