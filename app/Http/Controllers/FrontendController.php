<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Media;

class FrontendController extends Controller
{
    public function index()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('frontend.index', compact('latestPosts'));
    }

    public function articles()
    {
        $articles = Post::where('type', 'artikel')->latest()->paginate(9);
        return view('frontend.articles', compact('articles'));
    }

    public function ebooks()
    {
        $ebooks = Post::where('type', 'modul')->latest()->paginate(9);
        return view('frontend.ebooks', compact('ebooks'));
    }

    public function tutorials()
    {
        $tutorials = Media::latest()->paginate(9);
        return view('frontend.tutorials', compact('tutorials'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function showPost(Post $post)
    {
        return view('frontend.show_post', compact('post'));
    }
}
