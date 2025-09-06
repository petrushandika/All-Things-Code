{{-- <h1>This is book detail</h1>
<p>Book code: {{$id}}</p> --}}

@extends('layout', [
  'judul' => 'Book List'
  ])

@section('content')
<p>Book code: {{$id}}</p>
@endsection