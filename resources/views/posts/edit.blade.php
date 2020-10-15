<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<div class="New-task-add_title">
        <div class="New_add-task_title">
        編集
        </div>  
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