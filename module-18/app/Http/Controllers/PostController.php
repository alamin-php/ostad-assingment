<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    public function show($categoryId){
        $categoryCount = Post::countPostsByCategory($categoryId);
        return response()->json($categoryCount);
    }


    public function delete(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    public function softDelete(){
        $softDeletedPosts = Post::getSoftDeletedPosts();
        return response()->json($softDeletedPosts);
    }
}
