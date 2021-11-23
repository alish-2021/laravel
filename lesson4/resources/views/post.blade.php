@extends('layouts.app')

@section('content') 
   <div>
      <p><b>{{ $post->title }}</b></p>
      <p>{{ $post->preview }}</p>
      <hr>
   </div> 
@endsection