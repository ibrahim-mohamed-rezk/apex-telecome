<?php
namespace App\Services\Login;
use Illuminate\Support\Facades\Auth;

class LoginAuthService implements LoginInterface
{
    public function authLogin($requestContent) :array
    {
        $status = 400;
        $msg = [__('web.checkinputs')];
        $target = route('web.login');

        $remember = isset($requestContent['remember']) ? true : false;
        if (Auth::attempt(['email' => $requestContent['email'], 'password' => $requestContent['password']], $remember))
        {
            $status = 200;
            $msg = __('web.success');
            $target = route('web.index');
        }
        $response =
        [
            'status' => $status,
            'msg' => $msg,
            'data'=>$target,
        ];
        return $response;
    }
}