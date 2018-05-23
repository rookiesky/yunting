@extends('layouts.voice')
@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 search-margin-top-25">
                <div class="logo-center">
                    <span style="font-size: 40px;color: #00A0FF;font-family: unset;">{{ config('app.name', 'Laravel') }}</span>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入小说名称OR文章标题，宁可少输入，但请别输错O(∩_∩)O~">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">搜索内容</button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <div class="col-md-8 col-md-offset-2 text-primary text-center top-books">
                <div class="panel panel-default">
                    <div class="panel-heading">热门搜索</div>
                    <div class="panel-body">
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>
                        <div class="col-md-3 text-overflow"><a href="">文章小说标题</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
