@extends('layouts.main')
@section('content')
    <div>

            <div>{{$post->id}}. {{$post->title}}</div>
            <div>{{$post->content}}</div>
    </div>
    <div>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <a href="{{route('posts.index')}}">Back</a>
    </div>
    <div>
        <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
@endsection
