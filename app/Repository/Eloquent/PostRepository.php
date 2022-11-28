<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use App\Repository\BaseRepository;

class PostRepository extends BaseRepository
{
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function create($request){
        $validated = $request->validated();

        $post = $this->user->create($validated);

        if(!$post){
            return $this->failResponse("Post not created");
        }

        return [
            "status" => $this->successResponse('Post was successful'),
            "data" => $post,
        ];
    }

    public function update($request, $id){

        $post = $this->model->find($id);
        $post->update($request->all());

        if(!$post){
            return $this->failResponse("Post failed to update");
        }

        return $this->successResponse([
            "user" => $post,
            "message"=>"Post has been successfully updated"
        ]);
    }

    public function getAllPost(){
        dd($this->model->get());
        return $this->model->get();
    }

    public function getPostById(){
        
    }
}
