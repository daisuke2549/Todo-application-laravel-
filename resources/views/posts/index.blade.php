<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<div class="container">
  <div class="home-title">To do list</div>
   <div class="header-new-task-add-menu">
      <h1>
      <a href="{{ url('/posts/create') }}" class="header-new-task-add-menu">新規タスク追加</a>
      </h1>
      </div>
      <div class="TODOlist">
        <div class="current_task_title">
        Current Task
        </div>  
          <div class="task_list_title">
            タスク一覧
            <ul>
            <ul>
            {{--
            @foreach ($posts as $post)
            <li><a href="">{{ $post->title }}</a></li>
            @endforeach
            --}}
            @forelse ($posts as $post)
           <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li> 
            @empty
            <li>No posts yet</li>
            @endforelse
            </ul>
              <div class="dropdown">
                <div class = 'new_task_form'>   
                </div>
              </div>
          </div> 
      </div>
  </div> 
</div>
</body>
</html>