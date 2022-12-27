<?php

namespace App\Repository\Eloquent;

use App\Auth\AuthInterface;
use App\Models\User;
use App\Repository\BaseRepository;

class AuthRepository extends BaseRepository implements AuthInterface
{
    protected $model;
    protected $user;
    private const TRUE = true;
    private const FALSE = false;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function registration($data){

        $data['password'] = bcrypt($data['password']);

        if(!$user = $this->user->create($data)){
            return [
                "status" => self::FALSE,
                "message" => "Registration Failed"
            ];
        }

        return [
            "status" => self::TRUE,
            "user" => $user,
        ];
    }

    public function login($data){

        if(!auth()->attempt([
            'email' => $data->email,
            'password' => $data->password
            ])) {

            return [
                "status" => self::FALSE,
                "message" => "Invalid credientials"
            ];
        }

        auth()->login($this->user->where("email", $data->email)->first());

        return [
            "status" => self::TRUE,
            "user" => auth()->user(),
        ];
    }

    public function logout($data){
        return auth()->logout($data);
    }
}
