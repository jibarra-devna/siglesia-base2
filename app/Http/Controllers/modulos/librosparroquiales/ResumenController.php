<?php

namespace App\Http\Controllers\modulos\librosparroquiales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumenController extends Controller
{
  public function index()
  {
    return view('content.modulos.librosparroquiales.resumen');
  }
}
