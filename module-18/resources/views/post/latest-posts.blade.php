<!-- posts.blade.php -->
@extends('layouts.app')
@section('content')
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>

        @if ($category->posts->isEmpty())
            <p>No posts available.</p>
        @else
            <h3>Latest Post:</h3>
            <p>Title: {{ $category->get_latest_post()->title }}</p>
            <p>Content: {{ $category->get_latest_post()->content }}</p>
            <p>Timestamp: {{ $category->get_latest_post()->timestamp }}</p>
        @endif
        <hr>
    @endforeach
@endsection
