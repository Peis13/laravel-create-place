{{-- Creiamo una route che richiama un controller.
Il controller richiama un Model che mappa una tabella nel db (creata attraverso migrations) e passa i dati nella tabella alla view che stamperà a schermo i dati stessi. --}}

@extends('layouts.app')

@section('body_content')
  <h1>pagina students</h1>
  @foreach ($students as $student)
    <ul>
      <li>studente: {{ $student->nome }} {{ $student->cognome }}</li>
      <li>classe: {{ $student->classe }}</li>
      <li>voto: {{ $student->voto }}</li>
      <li>descrizione: {{ $student->descrizione }}</li>
    </ul>
  @endforeach
@endsection
