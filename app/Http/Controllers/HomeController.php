<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $postRepository;

    public function __contructor(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function home(){
        // ["posts" => $this->postRepository->getAllPost()]
        $posts = $this->postRepository->getAllPost();
        dd($posts);
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
