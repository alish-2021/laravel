@extends('layouts.app')

@section('content')
   @foreach ($posts as $post)
      <div>
         <a href="/lesson4/public/posts/{{ $post->id }}"><b>{{ $post->title }}</b></a>
         <p>{{ $post->preview }}</p>
         <hr>
      </div>
   @endforeach
@endsection