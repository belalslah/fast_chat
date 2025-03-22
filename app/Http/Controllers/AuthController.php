<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $requset) {}
    public function login() {}
    public function loginWithToken() {}
    public function logout() {}
}
