@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Access success</h1>

        <br>
        <a href="{{ route('logout') }}" class="btn btn-sm btn-info">Logout</a>
    </div>

@endsection
