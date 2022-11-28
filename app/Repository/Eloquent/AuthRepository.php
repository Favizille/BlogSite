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

    public function registration($request){
        $validated = $request->validated();
            $validated['password'] = bcrypt($validated['password']);

            $user = $this->user->create($validated);
            // dd($user);

            if(!$user){
                return $this->failResponse("User not registered");
            }

        return [
            "status" => $this->successResponse('Registration was successful'),
            "data" => $user,
        ];
    }

    public function access($request){

        if(!auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
            ])) {

            return $this->failResponse("Invalid login details");
        }

        $user = $this->user->where("email", $request->email)->first();

        auth()->login($user);

        return $this->successResponse([
                "user" => $user,
                "message"=>"Login successful"
        ]);
    }
}
