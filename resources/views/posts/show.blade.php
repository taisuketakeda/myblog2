@extends('layouts.default')

@section('title')
{{ $post->title }}
@endsection


@section('content')
<div class="container">
        <h1>
            {{ $post->title }}
            <a class="back" href="{{ url('/') }}">戻る</a>
        </h1>
        <p>{!! nl2br(e($post->body)) !!}</p>

        <h2>Comments</h2>

        <ul>
            @forelse($post->comments as $comment)
            <li>
               {{ $comment->body }}
               <a href="#" class="del" data-id="{{ $comment->id }}">[削除]</a>
                    <form  method="post" action="{{ action('CommentsController@destroy',[$post,
                    $comment]) }}" id="form_{{ $comment->id }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
            </li>

            @empty
            <li>No Comment yet</li>
            @endforelse
         </ul>

         <form method="post" action="{{ action('CommentsController@store',$post) }}">
        {{ csrf_field() }}
            <div>
                <label for="name">コメント</label>
                @if($errors->has('body'))
                <br><span class="error" >{{ $errors->first('body')}}</span>
                @endif
                <input type="text" name="body" value="{{ old('body') }}" placeholder="コメントを入力">
            </div>
            <input type="submit" value="コメントを投稿する">
        </form>

    </div>

    <script src="/js/main.js"></script>

@endsection

