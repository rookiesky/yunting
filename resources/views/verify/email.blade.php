@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">激活失败</div>

                    <div class="panel-body">
                            <div class="alert alert-danger">
                                {{ $msg }}
                            </div>

                        请确认您的邮箱地址重新发送<a href="/email/verify/resetSendEmail">发送邮件</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
