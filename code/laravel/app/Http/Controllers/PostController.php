<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
            'Model',
            'View',
            'Controller'
        ];

    public function index() {
        return view('index')->with(['posts' => $this->posts]);
    }

    public function text($id) {
        return view('posts.text')->with(['post' => $this->posts[$id]]);
    }
}
?>
