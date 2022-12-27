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

    public function home(){
        return view("home", ["posts" => $this->postRepository->getPaginatedPost()]);
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


    public  function getPostById($postId){

        $postResponse = $this->postRepository->getPostById($postId);

        if($this->responseIsFalse($postResponse)){
            return redirect()->back()->with(["message" => $postResponse["message"]]);
        }

        return view("blogpost", ["post" => $postResponse["post"]]);

    }


    public function getAllPost(){

       return view ("blog", ["posts" => $this->postRepository->getAllPost()]);
    }

    public function create(PostRequest $request){

        $postResponse = $this->postRepository->create($request->validated());

        if($this->responseIsFalse($postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return view("blogpost", ["post" => $postResponse["data"]]);
    }

    public function updatePost($postId){
        $postResponse = $this->postRepository->getPostById($postId);

        if($this->responseIsFalse($postResponse)){
            return view('blogpost', ["message" => $postResponse['message']]);
        }

        return view("editBlogPost", ["post" => $postResponse["post"]]);
    }

    public function update(Request $request, $id){
        $postResponse = $this->postRepository->update($request, $id);

        if($this->responseIsFalse($postResponse)){
            return view('home', ["message" => $postResponse['message']]);
        }

        return view("blogpost", ["post" => $postResponse["post"]]);
    }

    public function deletePost( $postId){

        $deleteResponse = $this->postRepository->delete($postId);

        if($this->responseIsFalse($deleteResponse)){

            return redirect()->back()->with(["message" => $deleteResponse['message']]);
        }

        return redirect("blog");

    }

    public function deleteAllPost(){

        $deleteResponse =  $this->postRepository->deleteAll();


        if($this->responseIsFalse($deleteResponse)){

            return redirect()->back()->with(["message" => $deleteResponse['message']]);
        }

        return redirect("blog");
    }

}
