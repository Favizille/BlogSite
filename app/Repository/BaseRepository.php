<?php
namespace App\Repository;

use Illuminate\Support\Str;
use App\Repository\EloquentRepositoryInterface;

class BaseRepository implements EloquentRepositoryInterface
{
    public function slugIt($text)
    {
        return Str::slug($text);
    }
}
