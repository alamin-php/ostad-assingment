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

    public function post()
    {
        $posts = DB::table('posts')->where('id', 2)->first();
        echo $posts->description;

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


    public function post1(){
        $posts = DB::table('posts')->where('id', 2)->pluck('description');
        echo $posts;
    }


    public function userByid(){
        $user = DB::table('users')->find(1);
        return $user;
    }


}
