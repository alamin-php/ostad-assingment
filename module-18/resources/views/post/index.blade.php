<!-- posts.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>All Posts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
