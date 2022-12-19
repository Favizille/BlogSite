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

    private function responseIsFalse($response){
        if($response['status'] == false){
            return true;
        }
        return false;

    }

    public function registration(RegisterRequest $request){

        $registrationResponse = $this->authRepository->registration($request->validated());

        if($this->responseIsFalse($registrationResponse)) {
            return view('register', ["message" => $registrationResponse['message']]);
        }

        return redirect("/");
    }

    public function loginUser(LoginRequest $request){
        // dd($request);
        $loginResponse = $this->authRepository->login($request);

        if($this->responseIsFalse($loginResponse)) {
            return view('login', ["message" => $loginResponse['message']]);
        }

        return redirect("blog");
    }

    public function logout(Request $request){
        $this->authRepository->logout($request);

        return redirect("/");
    }
}
