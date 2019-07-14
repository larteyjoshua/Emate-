<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function previewBook(Book $book)
    {
        $filename = $book->title.'_'.$book->isbn.'.pdf';
        $filepath = storage_path('app/books/'.$filename);
        if (File::exists($filepath)) {
            return response()->file($filepath);
        }
    }

    public function approve(Book $book)
    {
        $book->approved = true;
        $book->save();
        session()->flash('success', 'Book has been successfully approved');

        return redirect()->back();
    }

    public function disapprove(Book $book)
    {
        $book->approved = false;
        $book->save();
        session()->flash('success', 'Book has been successfully disapproved. Pending for Approval');

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string',  'max:255'],
            'isbn' => ['required', 'string', 'max:255', 'unique:books'],
            'category' => ['required', 'numeric'],
            'file' => ['required', 'file', 'mimes:pdf'],
            'comments' => ['nullable', 'string'],
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->category_id = $request->category;
        $book->user_id = auth()->id();
        $book->comments = $request->comments;

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $filename = $request->title.'_'.$request->isbn.'.'.$request->file->extension();
            $request->file->storeAs('books', $filename);
        }
        if ($book->save()) {
            session()->flash('success', 'Book has been successfully uploaded. Pending approval !');

            return redirect()->back();
        } else {
            session()->flash('error', 'Failed to upload book');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Book $book
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Book $book
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Book                $book
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Book $book
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $filename = $book->title.'_'.$book->isbn.'.pdf';
        $filepath = storage_path('app/books/'.$filename);
        if (File::exists($filepath)) {
            File::delete($filepath);
            if ($book->delete()) {
                session()->flash('success', 'Book has been successfully deleted');

                return redirect()->back();
            } else {
                session()->flash('error', 'Failed to Delete Book');

                return redirect()->back();
            }
        }
    }
}
