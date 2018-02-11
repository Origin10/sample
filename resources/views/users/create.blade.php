
@extends('layouts.default')
@section('title','註冊')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>註冊</h5>
    </div>
    <div class="panel-body">@include('shared._errors')
      <form method="POST" action="{{route('users.store')}}">{{ csrf_field() }}
        <div class="form-group">
          <label for="name">名稱：</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="email">郵箱：</label>
          <input type="text" name="email" value="{{old('email')}}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="password">密碼：</label>
          <input type="password" name="password" value="{{old('password')}}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="password_confirmation">確認密碼：</label>
          <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">註冊</button>
      </form>
    </div>
  </div>
</div>@stop