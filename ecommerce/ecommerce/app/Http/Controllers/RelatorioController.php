<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Gate;

class RelatorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listarProdutos()
    {
        Gate::authorize("acesso-administrador");
        $produtos = Produto::all();
        $pdf = PDF::loadView('relatorio.produto', compact('produtos'));
        return $pdf->stream();
    }
}
