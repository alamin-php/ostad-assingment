<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function page() {
        return view('pages.blog.index');
    }
    public function PostList() {
        return Post::with('tags')
        ->paginate(5);
    }
    public function SinglePost($id) {
        return Post::where('id', $id)
        ->with('tags')
        ->first();
    }
    
    public function PostUser($id) {
        return Post::where('id', $id)
        ->with('user')
        ->first();
    }
}
