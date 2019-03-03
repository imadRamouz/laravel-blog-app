@extends('layouts.app')
@section('content')
   <div class="jumbotron text-center">
        <h1 class="">{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore a, ab distinctio dolor soluta magnam officiis veniam laudantium maxime praesentium.</p>
        <p>
           @if (Auth::guest())
                <a href="/login" class="btn btn-primary btn-lg">Login</a>
                <a href="/register" class="btn btn-success btn-lg">Register</a>
           @endif
        </p>
   </div>
@endsection
