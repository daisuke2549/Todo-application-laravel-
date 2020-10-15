<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<div class="New-task-add_title">
        <div class="New_add-task_title">
        新規作成画面
        </div>  
       <div class="add-new-task-input-area">  
       <div class="todo-list-back-menu-button"> 
       <button><a href="{{ url('/') }}" class="todo-list-back-menu">一覧へ戻る</a></button>
       </div>
        <form method="post" action="{{ url('/posts') }}">
        {{ csrf_field() }}
        <p>
            <input type="text" name="title" placeholder="タスク名入力">
        </p>
        <p>
            <input type="text" name="deadline" placeholder="期限">
        </p>
        <p>
            <textarea name="body" placeholder="内容を入力"></textarea>
        </p>
        <p>
            <input type="submit" value="新規タスク追加" class="Add-new-task-button">
        </p>
        </form>
        </div>
</div>