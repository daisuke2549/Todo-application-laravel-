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
</body>
</html>