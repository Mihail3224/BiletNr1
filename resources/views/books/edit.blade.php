@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="/books/{{$book -> id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$book->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description"  name="description" value="{{$book->description}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Pretul</label>
            <input type="number" class="form-control" id="price"  name="price" value="{{$book->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection