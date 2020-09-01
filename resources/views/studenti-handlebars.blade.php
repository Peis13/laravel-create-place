@extends('layouts.app')

@section('body_content')
    <h1>pagina studenti-handlebars</h1>

    <div id="students-list"></div>

    <script id="students-template" type="text/x-handlebars-template">
        <ul>
          <li>studente: @{{ nome }} @{{ cognome }}</li>
          <li>classe: @{{ classe }}</li>
          <li>voto: @{{ voto }}</li>
          <li>descrizione: @{{ descrizione }}</li>
        </ul>
    </script>

    <script src="{{ asset('js\app.js') }}"></script>
@endsection
