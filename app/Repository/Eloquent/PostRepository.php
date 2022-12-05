<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use App\Repository\BaseRepository;

class PostRepository extends BaseRepository
{
    protected $model;
    private const TRUE = true;
    private const FALSE = false;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function create($data){

        if(!$post = $this->user->create($data)){
            return [
                "status" => self::FALSE,
                "message" => "Post Creation Failed"
            ];
        }

        return [
            "status" => self::TRUE,
            "data" => $post,
        ];
    }

    public function update($request, $id){

        $post = $this->model->find($id);
        $post->update($request->all());

        if(!$post){
            return [
                "status" => false,
                "message" => "Post failed to update",
            ];
        }

        return [
            "status" => true,
            "post" => $post,
        ];
    }

    public function getAllPost(){
        // dd($this->model->get());
        return $this->model->all();
    }

    public function getPostById(){

    }
}
