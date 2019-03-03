@extends('layouts.app')
@section('content')
  <a href="/posts" class="btn btn-default">Go Back</a>
  @if(isset($post))
    <h1>{{$post->title}}</h1>
     <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
     <br>
     <br>
    <div>{!!$post->body!!}</div>
    <br>
    <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
  @endif
  <br>
  <br>
  @if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)
         <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
  @endif
@endsection