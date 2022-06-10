<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // In /routes/web.php add /index

    public function index()
    {
        $produtos = Produto::all();

        return view("welcome", compact("produtos"));
    }

    public function detalhe($id)
    {
        $produto = Produto::findOrFail($id);
        //como incluir o orderBy()->get();
        return view("produto", compact("produto"));
    }
}
