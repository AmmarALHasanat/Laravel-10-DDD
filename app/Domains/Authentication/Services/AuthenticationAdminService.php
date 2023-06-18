<?php

namespace App\Domains\Authentication\Services;

use Exception;
use App\Rules\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Domains\Authentication\Rules\CheckUserHasRole;
use App\Domains\Authentication\Actions\LoginAdminAction;
use App\Domains\Authentication\Http\Requests\LoginRequest;
use App\Domains\Authentication\Rules\CheckAdminIsAuthenticated;


class AuthenticationAdminService
{

    public function login(LoginRequest $request, string $roleName)
    {
        // try {
        //     $admin = (new LoginAdminAction($request, $roleName))->execute();
        //     $ruleResults = Rules::apply([
        //         (new CheckAdminIsAuthenticated($request, $roleName)),
        //         // (new CheckUserHasRole($user,$roleName)),
        //     ]);
        //     if ($ruleResults->hasFailures())
        //         $ruleResults->toException();
        // } catch (Exception $exception) {
        //     return response()->json([
        //         'message' => $exception->getMessage(),
        //         'success' => false
        //     ], 400);
        // }
        // return redirect('dashboard');
    }
    public function showLoginForm(){
        return view('login');
    }
    public function logout(Request $request)
    {
        try {
            // (new LogoutUserAction($request))->execute();
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 400);
        }

        return response()->json([
            'message' => 'Success',
            'success' => true,
        ]);
    }
}
