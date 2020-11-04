<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <div class="header">
  <div class="header_title">タスク一覧</div>
  <div class="header-new-task-add-menu">
      <a href="{{ url('/posts/create') }}" class="header-new-task-add-menu"><button>新規タスク追加</button></a>
</div> 
<div class="header-new-task-login">
      <a href="{{ url('/login') }}" class="header-new-task-add-menu-login"><button>ログイン</button></a>
</div> 
  </div>

</header>

<div class="wrap">
<div class="TODOlist">
          <div class="task_list_title">
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
</div>
<footer>
        <div id="copyright" class="copyright">
          <p>Copyright &copy; 2020 Daisuke Sasaki's To do app All Rights Reserved.</p>
        </div>
</footer>
</body>
</html> 