
@extends('layouts.default')
@section('content')
@if (Auth::check())
<div class="row">
  <div class="col-md-8">
    <section class="status_form"></section>@include('shared._status_form')
    <h3>微博列表</h3>@include('shared._feed')
  </div>
  <aside class="col-md-4">
    <section class="user_info"></section>@include('shared._user_info', ['user' => Auth::user()])
  </aside>
</div>@else
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">你現在所看的是<a href="https://laravel-china.org/laravel-tutorial/5.1">Laravel 入門教程</a><span>的項目主頁。</span></p>
  <p>一切將從這裡開始。</p>
  <p><a href="{{ route('signup') }}" role="button" class="btn btn-lg btn-success">現在註冊</a></p>
</div>@endif
@stop