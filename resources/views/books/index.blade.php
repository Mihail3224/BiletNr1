@extends('layouts.app')

@section('title', 'books')

@section('content')
<div class="row mt-4 mb-3">
    <h4>books</h4>
</div>
<div class="row">
    <div class="col-md-10">
        <a href="{{ route('books.create') }}" class="btn btn-sm btn-dark mb-3">Add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->description }}</td>
                    <td>
                        <div class="row">
                            <a href="{{route('books.edit' , ['book'=>$book -> id])}}" class="btn btn-sm btn-warning col-4 ms-3">Edit</a>
                            <form class="col-4 " action="{{ route('books.destroy', ['book' => $book]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" {{ route('books.destroy', ['book' => $book]) }}>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No books</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection