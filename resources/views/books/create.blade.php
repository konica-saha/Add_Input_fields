@extends('books.layouts')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Add Product
                
                <a class="btn btn-danger float-end" href="{{ route('books.index') }}"> Back</a>
            </h2>
            <button class="btn btn-danger float-end" onclick="addFn()">Add Input Field</button>
           

        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                 <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Book name</label>
                            <input type="text" name="book_name" class="form-control" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Book Price</label>
                            <input type="number" name="book_price" class="form-control" placeholder="Price" />
                        </div>
                    </div>
                    <div class="col-md-12 col-12 text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>

        </div>
       

    </div>
      
<div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf   
            <div id="inputFields"></div>

            <script>
                function addFn() {
                const divEle = document.getElementById("inputFields");


                divEle.innerHTML += `
            <div class="card-header">
            <h2>
                Add Product
                
                <a class="btn btn-danger float-end" href="{{ route('books.index') }}"> Back</a>
            </h2>
           

            </div>

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="mb-3">
                    <label>Book name</label>
                    <input type="text" name="book_name" placeholder="Name" class="form-control">

                </div>
            </div>

            <div class="col-md-12 col-12">
                <div class="mb-3">
                    <label>Book price</label>
                    <input type="text" name="book_price" placeholder="Price" class="form-control">

                </div>
            </div>

            <div class="col-md-12 col-12 text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
            </div>
        ;
        }
    </script>
    </form>
    </div>
</div>


@endsection