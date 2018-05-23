<?php

namespace App\Http\Controllers;

use Mail;
use Naux\Mail\SendCloudTemplate;

class EmailController extends Controller
{
    /**
     * 发送用户邮箱激活邮件
     * @param $user
     */
    public static function sendRegEmailVerify($user)
    {
        $data = [
            'url' => route('email.verify',['token' => $user->confirmation_token]),
            'username' => $user->name
        ];

        $template = new SendCloudTemplate('regavate_rxcai', $data);

        Mail::raw($template, function ($message) use($user) {
            $message->from('rookie@sky5.net', '云听在线');
            $message->to($user->email);
        });
    }
}
