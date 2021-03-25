<?php

namespace App\Http\Controllers;

Use DB;
use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        /*$posts = Post::all();*/

        $posts = Post::orderBy('id', 'desc')->get();

        $tags = Tag::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();

        return view('specialist_doctors_bd.blog.blog', compact('posts','tags', 'categories'));
    }

    public function create(Request $request)
    {
        $post = new Post();

    	$post->title = $request->input('title');

    	$post->save();

    	$post->tags()->sync($request->tags, false);

    	/*session()->flash('done', 'Successfully Inserrted Chamber Location Information! Provide More Chamber Location Information If Exists.');

        return view('specialist_doctors_bd.layout.doctor-registration');*/

        return redirect('/home');
    }
}
