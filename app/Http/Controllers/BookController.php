<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Genero;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create() {
        return view('books.create_book');
    }

    public function store(Request $request) {
        Book::create([
            'isbn' => $request->isbn,
            'name' => $request->name,
            'autor' => $request->autor,
            'preco' => $request->preco,
            'description' => $request->description,
        ]);

        $books = Book::all();
        return view('books.info_book', ['books' => $books]);
    }

    public function info() {
        $books = Book::all();
        return view('books.info_book', ['books' => $books]);
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        $books = Book::all();
        return view('books.info_book', ['books' => $books]);
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('books.edit_book', ['book' => $book]);
    }

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->update([
            'isbn' => $request->isbn,
            'name' => $request->name,
            'autor' => $request->autor,
            'preco' => $request->preco,
            'description' => $request->description
        ]);
        $books = Book::all();
        return view('books.info_book', ['books' => $books]);
    }
}
