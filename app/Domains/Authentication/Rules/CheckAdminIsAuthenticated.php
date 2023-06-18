<?php

namespace App\Domains\Authentication\Rules;

use App\Domains\Interfaces\Rulable;
use Auth;
use Illuminate\Http\Request;

class CheckAdminIsAuthenticated implements Rulable
{
    protected string $role_name;
    protected Request $request;
    
    public function __construct(Request $request , string $role_name)
    {
        $this->request = $request;
        $this->role_name = $role_name;
    }

    public function run(): bool
    {
        return (bool) Auth::guard('admin')->attempt(['email'=>$this->request->email,'password'=>$this->request->password]);
    }

    public function getMessage(): string
    {
        return 'User is not authenticated';
    }

}