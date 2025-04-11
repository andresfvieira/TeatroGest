<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
  public function inicio(){
    return view('welcome');
  }
  public function gestionSalas(){
    return view('gestionSalas');
  }
  public function reservasUsuarios(){
    return view('reservasUsuarios');
  }
}
