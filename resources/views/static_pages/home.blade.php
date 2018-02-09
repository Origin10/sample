
@extends('layouts.default')
@section('title', '主頁')
@section('content')
<div class="jumbotron">
  <h1>Hello laravel</h1>
  <p class="lead">你現在看到的是<a herf="#">Laravel 入門教程</a>的項目演示頁面</p>
  <p>一切，從這裡開始。</p>
  <p><a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">現在註冊</a></p>
</div>@stop