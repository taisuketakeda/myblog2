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
    </div>
@endsection

