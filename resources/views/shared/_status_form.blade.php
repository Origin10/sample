
<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea rows="3" placeholder="聊聊新鮮事..." name="content" class="form-control">{{ old('content') }}</textarea>
  <button type="submit" class="btn btn-primary pull-right">發布</button>
</form>