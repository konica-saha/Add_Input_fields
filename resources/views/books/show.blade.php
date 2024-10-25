@extends('books.layouts')


@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Show book
                <a class="btn btn-danger float-end" href="{{ route('books.index') }}"> Back</a>
            </h2>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="mb-3">
                        <label>Book name</label>
                        <p>{{ $book->book_name }}</p>
                    </div>
                </div>

                <div class="col-md-12 col-12">
                    <div class="mb-3">
                        <label>Book Price</label>
                        <p>{{ $book->book_price }}</p>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

@endsection