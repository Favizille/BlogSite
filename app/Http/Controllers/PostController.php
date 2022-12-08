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

    public function post(){
        return view('write');
    }

    private function responseIsFalse($response){
        if($response['status'] = false){
            return true;
        }
        return false;

    }

    public function create(PostRequest $request){

        $postResponse = $this->postRepository->create($request->validated());

        if($this->responseIsFalse($postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        // dd($postResponse);

        return view("blogpost", ["post" => $postResponse["data"]]);
    }

    public function update(PostRequest $request, $id){
        $postResponse = $this->postRepository->update($request, $id);

        if($this->responseIsFalse($postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return redirect("blogPost");
    }

    public function getAllPost(){
       return view ("blog",$this->postRepository->getAllPost());
    }


    // public function getPostById($id){
    //     $this->postRepository->getPostById($id);

    //     if(array_key_exists('status_code', $postResponse)){
    //         return view('home', ["message" => $postResponse['message']]);
    //     }

    //     return redirect("blogPost");
    // }
}
