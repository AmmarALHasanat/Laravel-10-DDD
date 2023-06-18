<?php

namespace App\Domains\Authentication\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use App\Domains\Interfaces\Actionable;
use App\Domains\Authentication\Http\Requests\LoginRequest;

class LoginUserAction implements Actionable
{
    protected Request $request;
    protected string $role_name;

    public function __construct(LoginRequest $request)
    {
        $this->request = $request;
    }

    public function execute(): ? User
    {
        return User::where('email', $this->request->email)->first();
    }
}