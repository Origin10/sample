
@extends('layouts.default')
@section('title', '更新密碼')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">更新密碼</div>
        <div class="panel-body">@if (session('status'))
          <div class="alert alert-success">{{ session('status') }}</div>@endif
          <form method="POST" action="{{ route('password.request') }}" class="form-horizontal">{{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}"/>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">郵箱地址：</label>
              <div class="col-md-6">
                <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required="" autofocus="" class="form-control"/>@if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">密碼：</label>
              <div class="col-md-6">
                <input id="password" type="password" name="password" required="" class="form-control"/>@if ($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label for="password-confirm" class="col-md-4 control-label">確認密碼：</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" name="password_confirmation" required="" class="form-control"/>@if ($errors->has('password_confirmation'))<span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">修改密碼</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>@endsection