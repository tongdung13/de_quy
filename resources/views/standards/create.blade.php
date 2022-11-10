@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>formula</th>
                        <th>standard</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $item)
                        <tr>
                            <td>
                                @if (!empty($item->name))
                                    <i>
                                        {!! $item->name !!}
                                    </i>
                                @else
                                    <strong>
                                        {{ $item['name'] }}
                                    </strong>
                                @endif
                            </td>
                            <td>
                                <select name="formula[]" class="form-control select2" style="width:200px">
                                    @foreach (config('constants.FORMULA') as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="standard[]" class="form-control" id="">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>

@endsection
