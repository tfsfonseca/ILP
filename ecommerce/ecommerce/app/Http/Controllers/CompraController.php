<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    private $carrinho;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function compras()
    {
        $this->verificarCarrinho();
        if ($this->carrinho != null){
            $produtos = $this->carrinho->produtos;
        } else {
            $produtos = null;
        }

        return view("compras", compact('produtos'));

    }

    public function adicionar($id)
    {
        $this->verificarCarrinho();
        if($this->carrinho == null){
            $this->carrinho = Compra::create([
                'user_id' => Auth::id(),
                "status" => 'aberto'
            ]);
            //se algo der errado, é só tirar o else e deixar o código direto após o if
        } else {
            //quando for fazer uma operação crud, usar o método. não precisa usar quando for select
            $this->carrinho->produtos()->attach(
                Produto::findOrFail($id),
                ['quantidade' => 1, 'preco' => 0]
            );
        }
    //quando fizer o select, não precisa dos parênteses
    $produtos = $this->carrinho->produtos;
    return view('compras', compact('produtos'));
    }

    public function remover($id)
    {
        $this->verificarCarrinho();
        $this->carrinho->produtos()->detach(
            Produto::findOrFail($id));
        $produtos = $this->carrinho->produtos;
        return view('compras', compact('produtos'));
    }

    public function finalizar()
    {
        $this->verificarCarrinho();
        Compra::whereId($this->carrinho->id)->update(['status' => 'fechada']);
        return redirect('/');
    }

    private function verificarCarrinho(){
        //sempre verificar se existe uma compra em aberto
        $this->carrinho = Compra::where([
        'user_id' => Auth::id(),
        'status' => 'aberto'
        ])->first();
    }
}
