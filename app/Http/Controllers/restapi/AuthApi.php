<?php

namespace App\Http\Controllers\restapi;

use App\Enums\UserStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JWTAuth;

class AuthApi extends Controller
{
    public function login(Request $request)
    {
        try {
            $loginRequest = $request->input('email');
            $password = $request->input('password');

            $credentials = [
                'email' => $loginRequest,
                'password' => $password,
            ];

            $user = User::where('email', $loginRequest)->first();
            if (!$user) {
                return response((new MainApi())->returnMessage('Account not found!'), 404);
            }

            switch ($user->status) {
                case UserStatus::ACTIVE:
                    break;
                case UserStatus::INACTIVE:
                    return response((new MainApi())->returnMessage('Account not active!'), 400);
                case UserStatus::BLOCKED:
                    return response((new MainApi())->returnMessage('Account has been blocked!'), 400);
                case UserStatus::DELETED:
                    return response((new MainApi())->returnMessage('Account has been deleted!'), 400);
            }

            if (Auth::attempt($credentials)) {
                $token = JWTAuth::fromUser($user);
                $user->token = $token;
                $user->save();
                $expiration_time = time() + 86400;
                setCookie('accessToken', $token, $expiration_time, '/');
                toast('Welcome ' . $user->email, 'success', 'top-left');
                return response()->json($user);
            }
            return response((new MainApi())->returnMessage('Email or password incorrect!'), 400);
        } catch (\Exception $exception) {
            return response((new MainApi())->returnMessage('Error, Please try again!'), 400);
        }
    }

    public function register(Request $request)
    {
        try {
            $loginRequest = $request->input('email');
            $password = $request->input('password');


        } catch (\Exception $exception) {
            return response((new MainApi())->returnMessage('Error, Please try again!'), 400);
        }
    }

    public function logout(Request $request)
    {
        try {
            $user_id = $request->input('user_id');
            $user = User::find($user_id);
            if (!$user) {
                return response((new MainApi())->returnMessage('User not found'), 404);
            }
            $user->token = null;
            $user->save();
            return response((new MainApi())->returnMessage('Logout success'), 200);
        } catch (\Exception $exception) {
            return response((new MainApi())->returnMessage('Logout error'), 400);
        }
    }
}
