@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-right" style="text-align: right">
            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">Thêm mới</a>
        </div>
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
                                <i>
                                    <?php echo $item['name'] ?>
                                </i>
                            @else
                                <strong>
                                    {{ $item['name'] }}
                                </strong>
                            @endif
                        </td>
                        <td>
                            {{ $item['cid'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
