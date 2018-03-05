@if ($user->id !== Auth::user()->id)
<div id="follow_form">@if (Auth::user()->isFollowing($user->id))
  <form action="{{ route('followers.destroy', $user->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-sm">取消關注</button>@else
    <form action="{{ route('followers.store', $user->id) }}" method="post">{{ csrf_field() }}
      <button type="submit" class="btn btn-sm btn-primary">關注</button>
    </form>
  </form>@endif
</div>@endif