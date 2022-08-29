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
                            @else
                                {{ $item['name'] }}
                            @endif

                        </td>
                        <td>
                            @if (!empty($item->unit))
                                {{ $item->unit }}
                            @else
                                {{ $item['unit'] }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <form action="" method="get">
            <div class="form-group">
                <label for="">Category</label>
                <select name="" class="form-control" id="">
                    <option value="">Category</option>
                    @foreach ($category as $item)
                        @if (!empty($item->id))
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @else
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </form>
    </div>
@endsection
