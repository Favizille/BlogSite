<?php
namespace App\Repository;

use Illuminate\Http\Request;

interface EloquentRepositoryInterface
{
    // public function createPost(Request $request);

    // public function updatePost();

    // public function allPost();

    // public function getPost($postId);

    // public function deletePost($postId);
    public function slugIt($text);
}
