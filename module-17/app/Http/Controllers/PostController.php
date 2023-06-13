<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->select('excerpt', 'description')
            ->get();

        print_r($posts);
    }
    public function uniqueUsers()
    {
        $posts = DB::table('users')
        ->select('email')
        ->distinct()
        ->get();

        print_r($posts);
    }
}
