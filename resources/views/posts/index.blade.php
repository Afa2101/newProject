@extends('layouts.main')
@section('content')
    <div>
        <div>

            <a href="{{route('posts.create')}}" class="btn btn-success">Create post</a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{route('posts.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a>
            </div>
        @endforeach

        <div>
            {{$posts->withQueryString()->links()}}
        </div>
    </div>
@endsection
