<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index() {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function text($id) {

        $post = Post::findOrfail($id);

        return view('posts.text')->with(['post' => $post]);
    }
}
?>
