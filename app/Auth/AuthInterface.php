<?php

namespace App\Auth;

interface AuthInterface
{
    public function __construct();

    public function registration($data);

    public function login($data);

    public function logout($data);
}
