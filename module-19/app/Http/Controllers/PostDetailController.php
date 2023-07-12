<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function page() {
        return view('pages.blog-details.index');
    }

    public function PostShowComment($id) {
        return Post::where('id', $id)
        ->with('comments')
        ->get();
    }

    public function PostCreateComment(StoreCommentRequest $request) {
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;

        return $comment->save();
    }
}
