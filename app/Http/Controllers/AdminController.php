<?php

namespace App\Http\Controllers;

use App\User;
use App\Book;
use App\Category;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDashboard()
    {
        $users = User::get();
        $books = Book::get();

        return view('backend.pages.dashboard')->with([
            'books_count' => $books->count(),
            'lecturers_count' => $users->where('type', '=', 1)->count(),
            'students_count' => $users->where('type', '=', 0)->count(),
        ]);
    }

    public function getUsers()
    {
        $users = User::get();

        return view('backend.pages.users')->with([
            'users' => $users,
        ]);
    }

    public function getCategories()
    {
        $categories = Category::get();

        return view('backend.pages.categories')->with([
            'categories' => $categories,
        ]);
    }

    public function getBooks()
    {
        $books = Book::get();

        return view('backend.pages.books')->with([
            'books' => $books,
        ]);
    }
}
