<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Repository\Eloquent\PostRepository;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create(PostRequest $request){
        $postResponse = $this->postRepository->create($request);

        if(array_key_exists('status_code', $postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return redirect("blogPost");
    }

    public function update(PostRequest $request, $id){
        $postResponse = $this->postRepository->update($request, $id);

        if(array_key_exists('status_code', $postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return redirect("blogPost");
    }

    public function getAllPost(){
       return $this->postRepository->getAllPost();

        // if(array_key_exists('status_code', $postResponse)){
        //     return view('home', ["message" => $postResponse['message']]);
        // }

        // return redirect("blogPost");
    }

    public function getPostById($id){
        $this->postRepository->getPostById($id);

        if(array_key_exists('status_code', $postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return redirect("blogPost");
    }
}
