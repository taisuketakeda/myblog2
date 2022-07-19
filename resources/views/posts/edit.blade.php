@extends('layouts.default')

@section('title')
{{ $post->title }}
@endsection



@section('content')
<h1>
    <a class="back" href="/">戻る</a>
    {{ $post->title }}
</h1>
        <form method="post" action="{{ url('/posts/update',$post) }}">
        {{ csrf_field() }}
        {{ method_field('patch')}}
            <div>
                <label for="name">タイトル</label>
                @if($errors->has('title'))
                     <br><span class="error" >{{ $errors->first('title') }}</span>
                @endif
                <input type="text" name="title" value="{{ old('title',$post->title ) }}" placeholder="タイトルを入力してね">
            </div>
            <div>
                <label for="body">ボディ</label>
                @if($errors->has('body'))
                <br><span class="error">{{ $errors->first('body')}}</span>
                @endif
                <textarea name="body" placeholder="内容を入力してね">{{ old('body',$post->body ) }}</textarea>
            </div>
            <input type="submit" value="更新する">
        </form>
@endsection