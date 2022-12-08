<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view ('posts.index',[
            'posts' => Post::find(1),
            'tags' => Tag::find(1)
        ]);
    }
}
