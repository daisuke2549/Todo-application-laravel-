<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="container_show">
    <h1>
    <button><a href="{{ url('/') }}" class="header-back--menu">一覧へ戻る</a></button>
    </h1>
    <h2>{{ $post->title }}</h2>
      <div class="TODOlist">
        <div class="current_task_title">
        <h>タスク詳細</h>
        </div>  
          <div class="task_list_title">
              <div class="dropdown">
              <p>{!! nl2br(e($post->body)) !!}</p>
            </div>
            <div class="task_list_title_deadline">
              <div class="dropdown">
              <p>{!! nl2br(e($post->deadline)) !!}</p>
            </div>
          </div> 
      </div>
</div>
</body>
</html>