<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function all_post():object {
        $post=Post::with('user','category')->get();
        return response()->json([
            'posts'=>$post
        ],200);
    }
}
