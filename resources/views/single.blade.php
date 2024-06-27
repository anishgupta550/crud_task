@extends('layout')
@section('title')
Single user Data - {{ $data->name }}
@endsection
@section('heading')
Single user Data
@endsection
@section('content')

<div class="container mt-3">
    <a href="{{ route('crud.index') }}" class="btn btn-outline-dark">View All Data</a>
    <table class="table table-striped table-hover table-dark mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection