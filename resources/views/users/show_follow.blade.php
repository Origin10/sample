@extends('layouts.default')
@section('title', $title)

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>{{ $title }}</h1>
  <ul class="users">
    @foreach ($users as $user)
      <hr>
      <li>
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
        <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>
        @if($title == '你關注的人')
        <form action="{{ route('followers.destroy', $user->id) }}" method="post" style="float:right">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-sm btn-warning">取消關注</button>
        </form>
        @endif
      </li>
      <br>
    @endforeach
  </ul>

  {!! $users->render() !!}
</div>
@stop
