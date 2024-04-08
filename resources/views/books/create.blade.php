@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{route('books.store')}}" method="post">
    @csrf
    <div class="container mt-4">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Pretul</label>
            <input type="number" class="form-control" id="price"  name="price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection