@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select name="cid" class="form-control select2" id="">
                    <option value="">Danh mục cha</option>
                    @foreach ($category as $item)
                        @if (!empty($item->id))
                            <option value="{{ $item->id }}">{!! $item->name !!}</option>
                        @else
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="">
            </div>
            <div class="form-group">
                <label for="">Unit</label>
                <input type="text" name="unit" class="form-control" value="{{ old('unit') }}" id="">
            </div>
            <hr>
            <button type="submit" class="btn btn-sm btn-success button">Submit</button>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            //     $(".button").on('click', function(event) {
            //         event.preventDefault();
            //         var el = $(this);
            //         el.prop('disabled', true);
            //         setTimeout(function() {
            //             el.prop('disabled', false);
            //         }, 3000);
            //     });
            $(".button").dblclick(function() {
                var el = $(this);
                el.prop('disabled', true);
                setTimeout(function() {
                    el.prop('disabled', false);
                }, 3000);
            });
        });
    </script>
@endsection
