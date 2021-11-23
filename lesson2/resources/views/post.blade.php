@extends('layouts/app')

@section('content')
   <h1>{{ $post->title }}</h1>
   <p>{{ $post->body }}</p>
   <ul class="list-group">
      @foreach ($post->comments as $comment)
      <li>{{ $comment->body }}</li>
      @endforeach
   </ul>
@endsection