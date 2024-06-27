@extends('layout')
@section('title')
Insert Data
@endsection
@section('heading')
Insert Data
@endsection
@section('content')

<div class="container mt-3">
    <a href="{{ route('crud.index') }}" class="btn btn-outline-dark">View Data</a>
    
    <form action="{{ route('crud.store') }}" method="POST" class="border p-3 mt-3">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name">
            <span class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
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