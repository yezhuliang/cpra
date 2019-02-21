@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome</h1>
        <p class="lead">
            您现在看到的是C语言开发练习网站
        </p>
        <p>
            一切，将从这里开始~
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">登&nbsp;&nbsp;录</a>
        </p>
        <div id="a1">没有账号？<a href="{{ route('signup') }}">现在注册</a></div>
    </div>
@stop