<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="wrap1_new_task_add">
<header>
  <div class="header">
  <div class="header_title">タスク詳細</div>
<div class="header-new-task-login1">
@if(Auth::check())
<li><a href="{{ url('/logout') }}"><button>ログアウト</button></a></li>
@else
<li><a href="{{url('/register')}}"><button>ログイン</button></a></li>
@endif
</div> 
  </div>
</header>
<body>
<div class="task-detailed_title_wrap">
<div class="task-detailed_title">
       <div class="add-new-task-input-area">  
       <div class="todo-list-back-menu-button"> 
       <button><a href="{{ url('/') }}" class="todo-list-back-menu">一覧へ戻る</a></button>
       </div>
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
</div>
<!-- <div class="task-comment">
<h2>Comments</h2>
<ul>
  @forelse ($post->comments as $comment)
  <li>
    {{ $comment->body }}
  </li>
  <button><a href="#" class="delete" data-id="{{ $comment->id }}">コメント削除</a></button>
 <form method="post" action="{{ action('App\Http\Controllers\CommentsController@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
 </form>
  @empty
  <li>コメントがありません</li>
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
   <input type="submit" value="コメント追加">
  </p>
</form> -->
<script src="/js/main.js"></script>
</div>
</body>
</html>