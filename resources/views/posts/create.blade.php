@extends('layouts.default')

@section('title')
New Posts
@endsection



@section('content')
<h1>
    <a class="back" href="/">戻る</a>
    新規作成
</h1>
        <form method="post" action="{{ url('/posts') }}">
        {{ csrf_field() }}
            <div>
                <label for="name">タイトル</label>
                @if($errors->has('title'))
                <br><span class="error" >{{ $errors->first('title')}}</span>
                @endif
                <input type="text" name="title"value="{{ old('title') }}" placeholder="タイトルを入力">
            </div>
            <div>
                <label for="body">内容</label>
                @if($errors->has('body'))
                <br><span class="error">{{ $errors->first('body')}}</span>
                @endif
                <textarea name="body" placeholder="内容を入力">{{ old('body') }}</textarea>
            </div>
            <input type="submit" value="投稿する">
        </form>
@endsection