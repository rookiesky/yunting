<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
    public function email($token)
    {
        $user = User::where('confirmation_token',$token)->first();

        if ($user == null) {
            return view('verify.email',['status'=>2,'msg' => '激活失败！']);
        }

        $user->is_action = 1;
        $user->confirmation_token = str_random(40);
        $user->save();
        Auth::login($user);
        return redirect('/home');
    }

    /**
     * 从新发送邮箱激活邮件
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function resetSendRegEmail()
    {
        $user = Auth::user();
        EmailController::sendRegEmailVerify($user);
        return redirect('/user/action');
    }

    /**
     * 用户注册等待激活视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $emailSuffix = explode("@",Auth::user()->email);

        return view('verify.index',compact('emailSuffix'));
    }
}
