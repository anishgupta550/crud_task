@extends('layout')
@section('title')
Edit User Data - {{ $data->name }}
@endsection
@section('heading')
Edit User Data
@endsection
@section('content')

<div class="container mt-3">
    <a href="{{ route('crud.index') }}" class="btn btn-outline-dark">View Data</a>
    
    <form action="{{ route('crud.update',$data->id) }}" method="POST" class="border p-3 mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" value="{{ $data->name }}" class="form-control @error('name') is-invalid @enderror" name="name">
            <span class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" value="{{ $data->email }}" class="form-control @error('email') is-invalid @enderror" name="email">
            <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>

@endsection