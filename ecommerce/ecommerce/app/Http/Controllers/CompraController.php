<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function compras()
    {
        $carrinho = Compra::where([
            'user_id' => Auth::id(),
            'status' => 'aberto'
        ]);
        $produtos = array();
        return view("compras", compact('carrinho','produtos'));

    }
}
