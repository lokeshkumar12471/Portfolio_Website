<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home');
    }

    public function about()
    {
        return view('pages.frontend.about');
    }


    public function resume()
    {
        return view('pages.frontend.resume');
    }

    public function work()
    {
        return view('pages.frontend.works');
    }

    public function blogs()
    {
        return view('pages.frontend.blogs');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }
}