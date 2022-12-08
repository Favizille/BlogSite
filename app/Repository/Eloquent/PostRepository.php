<?php

namespace App\Repository\Eloquent;

use App\Models\Post;
use Illuminate\Support\Str;
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

    public function create($request){

        $image = $request['file_path'];
        $imageName = Str::slug($request["title"]) . '.' . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/uploads', $imageName);

        $post = $this->model->create([
            "title" => $request["title"],
            "description" => $request["description"],
            "file_path" => $imageName,
            "user_id" => $request["user_id"],
        ]);

        if(!$post){
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

        return $this->model->all();
    }

    public function getPostById(){

    }
}
