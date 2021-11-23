@extends('layouts/app')

@section('content')
   <h1>{{ $pageName }}</h1>
   <ul>
      @foreach ($students as $student)
      <li>
         <a href="/lesson3/public/student/{{ $student->id }}">
            <p>{{ $student->name }}</p>
            <small>{{ $student->age }}</small>
         </a>
      </li>
      @endforeach
   </ul>
@endsection