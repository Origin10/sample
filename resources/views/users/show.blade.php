
@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">@include('shared._user_info', ['user' => $user])</section>
        <section class="stats">@include('shared._stats', ['user' => $user])</section>
      </div>
    </div>
    <div class="col-md-12">
      @if (Auth::check())
      @include('users._follow_form')
      @endif
      @if (count($statuses) > 0)
      <ol class="statuses">
        @foreach ($statuses as $status)
        @include('statuses._status')
        @endforeach
      </ol>{!! $statuses->render() !!}
      @endif
    </div>
  </div>
</div>@stop
<script>
  document.getElementById('shareBtn').onclick = function() {
  FB.ui({
  method: 'share',
  display: 'popup',
  href: location.href,
  }, function(response){});
  }    
  
</script>
<script>
  window.fbAsyncInit = function() {
  FB.init({
  appId            : '217578548801139',
  autoLogAppEvents : true,
  xfbml            : true,
  version          : 'v2.12'
  });
  };
  (function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>