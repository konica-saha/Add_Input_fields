@extends('books.layouts')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Book System
                <a class="btn btn-primary float-end" href="{{ route('books.create') }}"> Create New book</a>
            </h2>
        </div>
        <div class="card-body">

            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Book name</th>
                    <th>Book Price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->book_name }}</td>
                    <td>{{ $book->book_price }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>

@endsection