<?php

namespace App\Domains\Authentication\Http\Controllers;

use App\Domains\Authentication\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Domains\Authentication\Services\AuthenticationAdminService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationAdminController extends Controller
{

    public function login(LoginRequest $request, AuthenticationAdminService $AdminAuthenticationService)
    {
        return $AdminAuthenticationService->login($request, Admin::SUPER_ROLE);
    }

    public function logout(Request $request, AuthenticationAdminService $AdminAuthenticationService)
    {
        return $AdminAuthenticationService->logout($request);
    }
}