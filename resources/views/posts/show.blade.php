<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="container_show">
    <h1>
    <button><a href="{{ url('/') }}" class="header-back--menu">一覧へ戻る</a></button>
    </h1>
    <h2>{{ $post->title }}</h2>
      <div class="TODOlist-detail"> 
            <table border="1" style="border-collapse: collapse">
            <tr>
              <th>タスク</th>
              <td>{!! nl2br(e($post->title)) !!}</td>
            </tr>
            <tr>
              <th>締切</th>
              <td>{!! nl2br(e($post->deadline)) !!}</td>
            </tr>
            <tr>
              <th>詳細</th>
              <td>{!! nl2br(e($post->body)) !!}</td>
            </tr> 
            </table>
      </div>
</div>
<div class="task-comment">
<h2>Comments</h2>
<ul>
  @forelse ($post->comments as $comment)
  <li>
    {{ $comment->body }}
  </li>
  @empty
  <li>No comments yet</li>
  @endforelse
</ul>
<form method="post" action="{{ action('App\Http\Controllers\CommentsController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="コメントを入力" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
   <input type="submit" value="Add Comment">
  </p>
</form>
</div>
</body>
</html>