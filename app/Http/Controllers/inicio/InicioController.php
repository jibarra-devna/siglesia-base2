<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
  public function index()
  {
    return view('content.inicio.inicio');
  }
}
