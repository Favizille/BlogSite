<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\BaseRepository;

class AuthRepository extends BaseRepository
{
    protected $model;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function registration($data){

            $data['password'] = bcrypt($data['password']);

            if(!$user = $this->user->create($data)){
                return [
                    "status" => false,
                    "message" => "Registration Failed"
                ];
            }

        return [
            "status" => true,
            "user" => $user,
        ];
    }

    public function login($data){

        // dd($data->email);

        if(!auth()->attempt([
            'email' => $data->email,
            'password' => $data->password
            ])) {

            return [
                "status" => false,
                "message" => "Invalid credientials"
            ];
        }

        auth()->login($this->user->where("email", $data->email)->first());

        return [
            "status" => true,
            "user" => auth()->user(),
        ];
    }

    public function logout($data){
        return auth()->logout($data);
    }
}
