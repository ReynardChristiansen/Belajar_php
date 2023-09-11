<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function addBook(){
        $this->authorize('is_admin');
        $publishers = Publisher::all();
        return view('addBook')->with('publishers', $publishers);
    }

    public function storeBook(Request $request){
        Book::create([
            'bookTittle' => $request->bookTittle,
            'publisherId' => $request->publisher,
            'author' => $request->author,
            'price' => $request->price,
            'releaseDate' => $request->releaseDate,
        ]);

        return redirect('/add/book');
    }

    public function allBook(){
        $tetew = Book::all();
        return view('welcome')->with('bookss', $tetew);
    }

    public function book($id){
        $book = Book::findOrFail($id);

        return view('bookDetail')->with('bookr', $book);
    }

    public function editBook($id){
        $book = Book::findOrFail($id);
        return view('updateBook')->with('book', $book);
    }

    public function updateBook($id, Request $request){
        $book = Book::findOrFail($id)->update([
            'bookTittle' => $request->bookTittle,
            'author' => $request->author,
            'price' => $request->price,
            'releaseDate' => $request->releaseDate,
        ]);
        
        return redirect(route('homepage'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('homepage'));
    }
}
