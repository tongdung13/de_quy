@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center">Danh Sach Post</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Stt</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        @php
                            $like = \App\PostLike::query()->where('post_id', $item->id)->count();
                        @endphp
                        <p>Co @if (!empty($like)) {{ $like  }} @else 0 @endif   luot thich</p>

                    </td>
                    <td>
                        <a href="{{ route('posts.detail', $item->id) }}">Xem</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
