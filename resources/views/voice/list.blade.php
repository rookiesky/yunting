@extends('layouts.voice')

@section('content')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" style="letter-spacing: 5px;">圣墟</div>

                    <div class="panel-body list-body">
                        <div class="col-md-3"><a href="">第一章 沙漠中的彼岸花</a></div>
                        <div class="col-md-3"><a href="">第二章 后文明时代</a></div>
                        <div class="col-md-3"><a href="">第三章 青铜昆仑</a></div>
                        <div class="col-md-3"><a href="">第四章 奇树与猛兽</a></div>
                        <div class="col-md-3"><a href="">第五章 花开</a></div>
                        <div class="col-md-3"><a href="">第六章 石盒</a></div>
                        <div class="col-md-3"><a href="">第七章 异变</a></div>
                        <div class="col-md-3"><a href="">第八章 世界变了</a></div>
                        <div class="col-md-3"><a href="">第九章 惊悚</a></div>
                        <div class="col-md-3"><a href="">第十章 剧变</a></div>
                        <div class="col-md-3"><a href="">第十一章 到家</a></div>
                        <div class="col-md-3"><a href="">第十二章 太行神山</a></div>
                        <div class="col-md-3"><a href="">第十三章 不属于此界</a></div>
                        <div class="col-md-3"><a href="">第十四章 牛魔王</a></div>
                        <div class="col-md-3"><a href="">第十五章 神秘呼吸法</a></div>
                        <div class="col-md-3"><a href="">第十六章 要出大事</a></div>
                        <div class="col-md-3"><a href="">第十七章 欲哭无泪</a></div>
                        <div class="col-md-3"><a href="">第十八章 恐慌未来</a></div>
                        <div class="col-md-3"><a href="">第十九章 奇异物质</a></div>
                        <div class="col-md-3"><a href="">第二十章 肉身成圣</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
