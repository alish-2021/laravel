@extends('layouts.app')

@section('content')
   <h1>Update: {{ $post->title }}</h1>

   <form action="/lesson2/public/post/update" method="post">
      @csrf
      <input type="hidden" name="id" value="{{ $post->id }}">
      <p>Title</p>
      <input type="text" value="{{ $post->title }}" name="title">
      <p>Body</p>
      <textarea name="body">{{ $post->body }}</textarea>
      <br><br>
      <button type="submit">Save changes</button>
   </form>
@endsection