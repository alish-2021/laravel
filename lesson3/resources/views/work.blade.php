@extends('layouts/app')

@section('content')
   <h1>{{ $work->name }}</h1>
   <h3>{{ $work->age }}</h3>
   <small>{{ $work->last_name }}</small>
   @foreach ( $work->works as $work)
       {{ $work->work_name }}
   @endforeach
@endsection