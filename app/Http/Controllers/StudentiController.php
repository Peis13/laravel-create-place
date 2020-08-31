<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentiController extends Controller
{
  public function index() {
    $studenti = [
      [
        'nome' => 'nicolò',
        'cognome' => 'paganelli',
        'voto' => 6
      ],
      [
        'nome' => 'sara',
        'cognome' => 'moretti',
        'voto' => 9
      ],
      [
        'nome' => 'lorenzo',
        'cognome' => 'zammarchi',
        'voto' => 7
      ]
    ];
    return view('studenti', ['studenti' => $studenti]);
  }
}
