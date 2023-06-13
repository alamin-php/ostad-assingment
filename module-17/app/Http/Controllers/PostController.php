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


    public function post1()
    {
        $posts = DB::table('posts')->where('id', 2)->pluck('description');
        echo $posts;
    }


    public function userByid()
    {
        $user = DB::table('users')->find(1);
        return $user;
    }


    public function postMethod()
    {

        $posts = DB::table('posts')->select('title')->get();

        foreach ($posts as $post) {
            echo $post->title . "\n";
        }
    }

    public function store(Request $request)
    {
        $postData = [
            'title' => 'X',
            'slug' => 'X',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ];

        $inserted = DB::table('posts')->insert($postData);

        if ($inserted) {
            echo "Record inserted successfully!";
        } else {
            echo "Failed to insert record.";
        }
    }




    public function update(Request $request)
    {
        $id = 2;
        $newExcerpt = 'Laravel 10';
        $newDescription = 'Laravel 10';

        $affectedRows = DB::table('posts')
            ->where('id', $id)
            ->update([
                'excerpt' => $newExcerpt,
                'description' => $newDescription,
            ]);

        echo "Number of affected rows: " . $affectedRows;
    }




    public function delete()
    {
        $id = 3;

        $affectedRows = DB::table('posts')
            ->where('id', $id)
            ->delete();

        echo "Number of affected rows: " . $affectedRows;
    }


    public function userRole()
    {
        $users = DB::table('users')
            ->whereNot('role', 'admin')
            ->get();
        return $users;
    }



    public function checkOrder()
    {
        $exists = DB::table('orders')->where('status', 'active')->exists();

        if ($exists) {
            echo "Active orders exist.";
        } else {
            echo "No active orders.";
        }
    }



    public function minToRead()
    {
        $posts = DB::table('posts')
            ->whereBetween('min_to_read', [1, 5])
            ->get();

        foreach ($posts as $post) {
            echo $post->title . "\n";
        }
    }


    public function minToReadOne()
    {
        $id = 3;

        $affectedRows = DB::table('posts')
            ->where('id', $id)
            ->increment('min_to_read', 1);

        echo "Number of affected rows: " . $affectedRows;
    }


}
