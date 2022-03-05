<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function exemplo()
    {
        return view('exemplo');
    }

    public function resultado(Request $request)
    {
        $valor = $request['valor'];
        return 'O valor informado é '.$valor;
    }
}
