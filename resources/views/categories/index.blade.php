@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            @if (!empty($item->name))
                                {{ $item->name }}
                            @endif

                        </td>
                        <td>
                            @if (!empty($item->unit))
                                {{ $item->unit }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
