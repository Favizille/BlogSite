<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home' );
    }

    public function about(){
        return view('about');
    }

    public function blog(){
        return view('blog');
    }

    public function blogPost(){
        return view('blogpost');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view ('contact');
    }

}
