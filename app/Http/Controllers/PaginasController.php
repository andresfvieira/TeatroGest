<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
  public function inicio(){
    return view('inicio');
  }
  public function gestionSalas(){
    return view('');
  }
  public function reservasUsuarios(){
    return view('');
  }
}
