<?php

namespace App\Domains\Authentication\Http\Controllers;

use App\Domains\Authentication\Http\Requests\LoginRequest;
use App\Domains\Authentication\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Domains\Authentication\Services\AuthenticationUserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationUserController extends Controller
{

    public function login(LoginRequest $request, AuthenticationUserService $authenticationService)
    {
        return $authenticationService->login($request,User::USER_ROLE);
    }

    public function register(RegisterUserRequest $request, AuthenticationUserService $authenticationService)
    {
        return $authenticationService->register($request);
    }

    public function logout(Request $request, AuthenticationUserService $authenticationService)
    {
        return $authenticationService->logout($request);
    }
}
