<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function primeiroExercicio()
    {
        return view("exercicio1");
    }

    public function thais()
    {
        return view("thaisf");
    }

    public function home()
    {
        return view("layout");
    }
}
