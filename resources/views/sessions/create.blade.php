
@extends('layouts.default')
@section('title', '登入')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>登入</h5>
    </div>
    <div class="panel-body">@include('shared._errors')
      <form method="POST" action="{{ route('login') }}">{{ csrf_field() }}
        <div class="form-group">
          <label for="email">電子郵件：</label>
          <input type="text" name="email" value="{{ old('email') }}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a><span>）：</span></label>
          <input type="password" name="password" value="{{ old('password') }}" class="form-control"/>
        </div>
        <div class="checkbox">
          <lable>
            <input type="checkbox" name="remember" style="margin-left: 5px"/><span style="margin-left: 25px">記住我</span>
          </lable>
        </div>
        <button type="submit" class="btn btn-primary">登入</button>
      </form>
      <hr/>
      <p>還沒有帳號？<a href="{{ route('signup') }}">現在註冊！</a></p>
    </div>
  </div>
</div>@stop