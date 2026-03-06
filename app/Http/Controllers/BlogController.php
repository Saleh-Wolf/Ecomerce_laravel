<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate(6);

        return view('home', compact('posts'));
    }

    public function category($id)
    {
        $category = Category::with('posts')->findOrFail($id);

        return view('category', compact('category'));
    }

    public function show($id)
    {
        $post = Post::with('category')->findOrFail($id);

        return view('post', compact('post'));
    }
    public function search(Request $request)
{
    $posts = Post::where('title','like','%'.$request->search.'%')
        ->paginate(6);

    return view('home', compact('posts'));
}

}