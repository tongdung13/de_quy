@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center">Chi tiet post</h1>
        <hr>
        <h3 class="text-center">{{ $posts->title }}</h3>
        <p>{{ $posts->description }}</p>


        
    </div>

@endsection
