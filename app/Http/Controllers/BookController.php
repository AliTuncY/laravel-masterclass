<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::get();
        return view('books.index', ['books' => $books]);
    }
    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();

        return redirect()->back();
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.edit', ['book' => $book]);
    }


    public function update(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();

        return redirect()->back();
    }

    public function delete($id){
        $book = Book::findOrFail($id)->delete();
        return redirect()->back();
    }
}
