<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //Get All Posts
    public function getAllPosts() {
        $posts = Post::with('owner')->get();
    
        // Return the posts as json
        return response()->json($posts);
    }

}
