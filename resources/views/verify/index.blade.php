@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">用户激活</div>

                    <div class="panel-body">
                            <div class="alert alert-success">
                                激活邮件已发送，请前往您的邮箱进行激活！<a href="http://{{ $emailSuffix[1] }}" target="_blank">点击前往>></a>
                            </div>
                            重新发送激活邮件 <a href="/email/verify/resetSendEmail">发送邮件</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
