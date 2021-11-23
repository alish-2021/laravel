@extends('layouts.app')

@section('content')
<form action="create/post" method="post">
   @csrf
   <input type="text" name="title" placeholder="Title">
   <br>
   <textarea name="preview" type="text" placeholder="Text"></textarea>
   <br><br>
   <button type="submit">Create Post</button>
</form>
@endsection