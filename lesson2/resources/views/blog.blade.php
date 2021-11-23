@extends('layouts/app')

@section('content')
<h1 class="mt-4">Articles</h1>

<form action="post" method="post">
   @csrf
   <p>Title</p>
   <input type="text" name="title" id="title">
   <p>Body</p>
   <textarea name="body" id="body"></textarea>
   <br><br>
   <button type="submit" onclick="event.preventDefault(); addPost()">Add</button>
</form>


<script>
   function addPost(){
      let title = document.querySelector('#title').value;
      let body = document.querySelector('#body').value;

      let formData = new FormData();
      formData.append('title', 'body');

      fetch('/post', {
         method: "POST",
         body: formData,
      })

   }

</script>

@foreach ($posts as $post)
   <div>
      <a href="/lesson2/public/post/{{ $post->id }}">
         <p>{{ $post->title }}</p>
         <small>{{ $post->created_at->format('d.m.Y') }}</small>
      </a>
      <p>{{ $post->body }}</p>
      <form action="/lesson2/public/post/delete" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{ $post->id }}">
         <button type="submit">delete</button>
      </form> 
      <a href="/lesson2/public/post/{{ $post->id }}/update">update</a> 
   </div>
@endforeach

@endsection