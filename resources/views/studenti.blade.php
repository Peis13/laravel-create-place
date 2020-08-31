@extends('layouts.app')

@section('body_content')
  <h1>pagina studenti</h1>
  @foreach ($studenti as $studente)
    <ul>
      <li>{{ $studente['nome'] }}</li>
      <li>{{ $studente['cognome'] }}</li>
      <li>{{ $studente['voto'] }}</li>
    </ul>
  @endforeach
@endsection
