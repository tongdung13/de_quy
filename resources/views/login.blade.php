@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-title">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
