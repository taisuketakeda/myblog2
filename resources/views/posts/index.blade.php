@extends('layouts.default')

@section('title')
Blog Posts
@endsection



@section('content')
<h1>
    Blog Posts
    <a class="back" href="{{ url('/posts/create') }}">New</a>
</h1>
        <ul>
            
            {{--@foreach($posts as $post)
            <li><a href="">{{$post->title}}</a></li>
            @endforeach
            --}}


            @forelse($posts as $post)
            {{--<li><a href="/posts/{{$post->id}}">{{$post->title}}</a></li>--}}
            {{--<li><a href="{{ url('/posts', $post->id) }}">{{$post->title}}</a></li>--}}
            
            <li>
                <a href="{{action('PostsController@show',$post)}}">{{$post->title}}</a>
                <a href="{{action('PostsController@edit',$post)}}">[Edit]</a>
                <a href="#" class="del" data-id="{{ $post->id }}">[X]</a>
                    <form action="{{ url('/posts/delete', $post) }}" method="post"
                    id="form_{{ $post->id }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
            </li>

            @empty
            <li>No posts yet</li>
            @endforelse
         </ul>

         <script src="/js/main.js"></script>

@endsection