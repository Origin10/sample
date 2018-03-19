@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared.status_form')
        </section>
        <h3>所有動態</h3>
        @include('shared/feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared.user_info', ['user' => Auth::user()])
        </section>
        <section class="stats">
          @include('shared.stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p class="lead">
        你现在所看到的是 <a href="https://laravel-china.org/laravel-tutorial/5.1">Laravel 入门教程</a> 的项目主页。
      </p>
      <p>
        一切，将从这里开始。
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
      </p>
    </div>

    <div id="shareBtn" class="btn btn-primary clearfix">分享到臉書</div>



			<div class="fb-share-button" data-href="" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="" class="fb-xfbml-parse-ignore">分享</a></div>


      <div class="fb-share-button" data-layout="button_count" data-size="large" data-mobile-iframe="true">
				<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;" target="_blank" class="fb-xfbml-parse-ignore">分享至facebook</a>
			</div>


      <script>
            document.getElementById('shareBtn').onclick = function() {
              FB.ui({
                method: 'share',
                mobile_iframe: true,
                href: location.href,
              }, function(response){});
            }
      </script>

      <div id="fb-root"></div>
  		
      <script>(function(d, s, id) {
  			  var js, fjs = d.getElementsByTagName(s)[0];
  			  if (d.getElementById(id)) return;
  			  js = d.createElement(s); js.id = id;
  			  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.7&appId=217578548801139&autoLogAppEvents=1';
  			  fjs.parentNode.insertBefore(js, fjs);
  			}(document, 'script', 'facebook-jssdk'));</script>



      <script>
          window.fbAsyncInit = function() {
          FB.init({
            appId: '217578548801139',
            xfbml: true,
            version: 'v2.7'
          });
          };

          (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {
            return;
          }
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));

      </script>
  @endif
@stop
