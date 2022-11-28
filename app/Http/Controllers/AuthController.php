<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Repository\Eloquent\AuthRepository;

class AuthController extends Controller
{
    protected $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(){
        return view("register");
    }

    public function login(){
        return view("login");
    }

    public function registration(RegisterRequest $request){
        // dd($request);
        $registrationResponse = $this->authRepository->registration($request);

        if(array_key_exists('status_code', $registrationResponse)) {
            return view('register', ["message" => $registrationResponse['message']]);
        }

        return redirect("blog");
    }

    public function access(LoginRequest $request){
        $accessResponse = $this->authRepository->access($request);

        if(array_key_exists('status_code', $accessResponse)) {
            return view('login', ["message" => $accessResponse['message']]);
        }

        return redirect("home");
    }
}
