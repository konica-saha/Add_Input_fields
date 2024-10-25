<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index(){
    $books = books::all();
    return view('books.index', compact('books'));
   }

   public function create(){
    return view('books.create');
   }

   public function store(Request $request){
     $request->validate([
        'book_name' => 'required|string|max:255',
        'book_price' => 'required|numeric',
    ]);

    $kk = books::create($request->all());

    return redirect(route('books.index'))->with('success','Book created successfully.');
   
   }

   public function show(books $book){

    return view('books.show',compact('book'));

   }

  
}
