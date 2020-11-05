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
  <div class="header_title">タスク編集</div>
<div class="header-new-task-login1">
@if(Auth::check())
<li><a href="{{ url('/logout') }}"><button>ログアウト</button></a></li>
@else
<li><a href="{{url('/register')}}"><button>ログイン</button></a></li>
@endif
</div> 
  </div>
</header>
<div class="New-task-add_title">
       <div class="add-new-task-input-area">  
       <div class="todo-list-back-menu-button"> 
       <button><a href="{{ url('/') }}" class="todo-list-back-menu">一覧へ戻る</a></button>
       </div>
        <form method="post" action="{{ url('/posts', $post->id) }}">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <p>
            <input type="text" name="title" placeholder="タスク名入力" value="{{ old('title',$post->title)}}">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>
        <p>
            <input type="text" name="deadline" placeholder="期限">
            @if ($errors->has('deadline'))
            <span class="error">{{ $errors->first('deadline') }}</span>
            @endif
        </p>
        <p>
            <textarea name="body" placeholder="内容を入力">{{ old('body',$post->body)}}</textarea>
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="タスク更新" class="Add-new-task-button">
        </p>
        </form>
        </div>