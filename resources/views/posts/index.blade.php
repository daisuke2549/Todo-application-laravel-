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
<div class="register-button">

</div>
<div class="home-title">To do list({{ Auth::user()->name }})

</div>
   <div class="header-new-task-add-menu">
      <h1>
      <a href="{{ url('/posts/create') }}" class="header-new-task-add-menu"><button>新規タスク追加</button></a>
      </h1>
      </div>
      <div class="TODOlist">
        <div class="current_task_title">
        タスク一覧
        </div>  
          <div class="task_list_title">
            <ul>
            <ul>
            {{--
            @foreach ($posts as $post)
            <li><a href="">{{ $post->title }}</a></li>
            @endforeach
            --}}
            @forelse ($posts as $post)
           <li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li>
           <button> <a href="{{ action('App\Http\Controllers\PostsController@edit', $post) }}" class="edit">編集する</a></button> 
           <button><a href="#" class="delete" data-id="{{ $post->id }}">削除</a></button>
          <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
          </form>  
           @empty
            <li>No posts yet</li>
            @endforelse
            </ul>
              <div class="dropdown">
                <div class = 'new_task_form'>   
                </div>
              </div>
              <script src="/js/main.js"></script>
          </div> 
      </div>
  </div> 
</div>
</body>
</html> 