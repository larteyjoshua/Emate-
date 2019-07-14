<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getLandingPage()
    {
        $categories = Category::get();

        return view('frontend.pages.home')->with([
            'categories' => $categories,
        ]);
    }

    public function getContactPage()
    {
        return view('frontend.pages.contact');
    }

    public function getCoursePage()
    {
        $categories = Category::get();

        return view('frontend.pages.course')->with([
            'categories' => $categories,
        ]);
    }

    public function getAboutPage()
    {
        return view('frontend.pages.about');
    }

    public function getAccountPage()
    {
        return view('frontend.pages.account');
    }

    public function getProfilePage()
    {
        return view('frontend.pages.profile')->with([
            'user' => auth()->user(),
        ]);
    }

    public function getUploadPage()
    {
        $categories = Category::get();

        return view('frontend.pages.upload')->with([
            'categories' => $categories,
        ]);
    }

    public function getBookList(Request $request, Category $category)
    {
        return view('frontend.pages.booklist')->with([
            'category' => $category,
        ]);
    }
}
