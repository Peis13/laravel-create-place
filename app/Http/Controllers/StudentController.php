<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index() {
    // $students = [
    //   [
    //     'nome' => 'nicolò',
    //     'cognome' => 'paganelli',
    //     'voto' => 6
    //   ],
    //   [
    //     'nome' => 'sara',
    //     'cognome' => 'moretti',
    //     'voto' => 9
    //   ],
    //   [
    //     'nome' => 'lorenzo',
    //     'cognome' => 'zammarchi',
    //     'voto' => 7
    //   ]
    // ];
    $students = Student::all();
    // dd($students);

    return view('studenti', compact('students'));
  }
}
