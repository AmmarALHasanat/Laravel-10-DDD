<?php

namespace App\Domains\Authentication\Actions;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Domains\Interfaces\Actionable;
use App\Domains\Authentication\Http\Requests\LoginRequest;

class LoginAdminAction implements Actionable
{
    protected Request $request;

    public function __construct(LoginRequest $request)
    {
        $this->request = $request;
    }

    public function execute(): ?Admin
    {
        return Admin::where('email', $this->request->email)->first();
    }
}