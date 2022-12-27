<?php
namespace App\Repository;

use Illuminate\Http\Request;

interface EloquentRepositoryInterface
{
    public function slugIt($text);
}
