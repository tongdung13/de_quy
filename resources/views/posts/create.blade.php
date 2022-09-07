@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="" class="form-control" id="">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="" id="ckeditor" class="form-control" rows="50"></textarea>
            </div>
        </form>
    </div>

@endsection
