@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>User Login History</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userHistories as $key => $history)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $history->user->name }}</td>
                        <td>{{ $history->start_date }}</td>
                        <td>{{ $history->end_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
