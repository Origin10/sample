
<li id="status-{{ $status->id }}"><a href="{{ route('users.show', $user->id )}}"><img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/></a><span class="user"><a href="{{ route('users.show', $user->id )}}">{{ $user->name }} &nbsp</a></span><span class="timestamp">{{ $status->created_at->diffForHumans() }}</span><span class="content">{{ $status->content }}</span>
  @can('destroy', $status)
  <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-sm btn-danger status-delete-btn">刪除</button>
  </form>@endcan
  <div id="shareBtn" class="btn btn-sm btn-info clearfix">分享FB</div>
</li>