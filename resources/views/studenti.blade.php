@extends('layouts.app')

@section('body_content')
  <h1>pagina students</h1>
  @foreach ($students as $student)
    <ul>
      <li>{{ $student->nome }}</li>
      <li>{{ $student->cognome }}</li>
      <li>{{ $student->voto }}</li>
    </ul>
  @endforeach
@endsection
