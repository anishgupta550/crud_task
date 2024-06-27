@extends('layout')
@section('title')
All Data Fetch
@endsection
@section('heading')
All Data
@endsection
@section('content')

<div class="container mt-3">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible mb-3">
        <p class="mb-0">{{session('status')}}</p>
        <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
    <a href="{{ route('crud.create') }}" class="btn btn-outline-dark">Add Data</a>
    <table class="table table-striped table-hover table-dark mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <form action="{{ route('crud.destroy',$item->id) }}" method="POST">
           
                        <a class="btn btn-info btn-sm" href="{{ route('crud.show',$item->id) }}"><i class="fa-solid fa-list"></i> Show</a>
        
                        <a class="btn btn-primary btn-sm" href="{{ route('crud.edit',$item->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center py-3">No Data Found</td>
                </tr>
                @endforelse
        </tbody>
    </table>
</div>

@endsection