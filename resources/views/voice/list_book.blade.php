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
    <div class="container" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" style="letter-spacing: 5px;">圣墟</div>

                    <div class="panel-body">
                        {{--media start--}}
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="https://www.zwdu.com/files/article/image/18/18316/18316s.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">星神兵王</h4>
                                华国兵王陈星，在联合国维和部队执行任务期间被汽车炸弹炸飞。 灵魂穿越到星际世界，并借助神秘星神项链，成为基因进化者。 从此，铁血之路开启！ 陈星带领忠诚的兄弟们横扫星际！踏血高歌！成就星神兵王！
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="https://www.zwdu.com/files/article/image/18/18316/18316s.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">星神兵王</h4>
                                华国兵王陈星，在联合国维和部队执行任务期间被汽车炸弹炸飞。 灵魂穿越到星际世界，并借助神秘星神项链，成为基因进化者。 从此，铁血之路开启！ 陈星带领忠诚的兄弟们横扫星际！踏血高歌！成就星神兵王！
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="https://www.zwdu.com/files/article/image/18/18316/18316s.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">星神兵王</h4>
                                华国兵王陈星，在联合国维和部队执行任务期间被汽车炸弹炸飞。 灵魂穿越到星际世界，并借助神秘星神项链，成为基因进化者。 从此，铁血之路开启！ 陈星带领忠诚的兄弟们横扫星际！踏血高歌！成就星神兵王！
                            </div>
                        </div>

                        {{--media stop--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
