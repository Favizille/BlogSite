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

    // public function updateWhyusPageSetting(Request $request,$id){
    //     $data = [];
    //     $data['title'] = $request->input('title');
    //     if($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $image->move(public_path('/frontend/images/'),$imageName = $image->hashName()); //hashName() will generate image name with extension
    //         $data['image'] = $imageName; // here if user uploads an image, it will add to data array then add to DB.
    //     }

    //      DB::table('features')
    //         ->where('id', $id)
    //         ->update($data); // if a user uploaded an image will add. if not, a previous image will not change
    //      \Session::flash('flash_message', __('Why us data updated'));
    //      \Session::flash('flash_type', 'success');

    //          return redirect()->back();
    // }

    public function update($request, $id){

        $post = $this->model->find($id);

        if(!$post){
            return [
                "status" => false,
                "message" => "Post failed to update",
            ];
        }

        $data = [];
        $data["title"] = $request->input('title');
        $data["description"] = $request->input('description');

        if($request->hasFile('file_path')){
            $image = $request->input('file_path');
            $imageName = Str::slug($data["title"]) . '.' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $imageName);
            $data['file_path'] = $imageName;
        }

        $post->where('id', $id)->update($data);

        return [
            "status" => true,
            "post" => $post,
        ];
    }

    public function getAllPost(){

        return $this->model->all();
    }

    public function getPostById($postId){
        $post = $this->model->find($postId);


        if(!$post){
            return [
                "status" => self::FALSE,
                "message" => "Post update Failed"
            ];
        }

        return [
            "status" => self::TRUE,
            "data" => $post,
        ];
    }
}
