@extends('layouts.default')

@section('title')
New Posts
@endsection



@section('content')
<h1>
    <a class="back" href="/">Back</a>
    New Post
</h1>
        <form method="post" action="{{ url('/posts') }}">
        {{ csrf_field() }}
            <div>
                <label for="name">タイトル</label>
                <input type="text" name="title" placeholder="タイトルを入力してね">
            </div>
            <div>
                <label for="body">ボディ</label>
                <textarea name="body" placeholder="内容を入力してね"></textarea>
            </div>
            <input type="submit" value="送信する">
        </form>
@endsection