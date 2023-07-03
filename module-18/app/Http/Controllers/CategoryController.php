<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->get();

        return view('post.category-posts', ['category' => $category, 'posts' => $posts]);
    }

    public function latestPostOfCategory()
    {
        $latestPostCat = Category::with([
            'posts' => function ($q) {
                $q->latest()->take(10);
            }
        ])->get();
        return view('post.latest-posts', ['latesPost' => $latestPostCat]);
    }
}
