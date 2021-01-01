<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paginasInicial;

class PaginaInicialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view(paginasInicial);
    }
}
