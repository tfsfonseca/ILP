<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function areaCliente()
    {
        Gate::authorize("acesso-cliente");
        $pedidos_anteriores = Compra::with('produtos')->where([
            'user_id' => Auth::id(),
            'status' => 'fechada'
        ])->get();
        $pedido_aberto = Compra::with('produtos')->where([
            'user_id' => Auth::id(),
            'status' => 'fechada'
        ])->first();
        return view('areaCliente', compact('pedidos_anteriores', 'pedido_aberto'));
    }

    private function existe_venda_aberta(){
        $this->compra = Compra::with('produtos')->where([
            'user_id' => Auth::id(),
            'status' => 'aberta'
        ])->first();
        return $this->compra != null;
    }

    private function existe_produto_na_venda()
    {
        return $this->compra->produtos->contains($this->produto);
    }

    private function incrementar_produto_venda()
    {
        $quantidade = ($this->compra->produtos->find($this->produto->id)->pivot->quantidade) +1;
        $this->compra->produtos()->updateExistingPivot($this->produto->id, ['quantidade' => $quantidade]);

    }

    private function abrir_venda()
    {
        $this->compra = Compra::create([
            'user_id' => Auth::id(),
            'total' => $this->produto->valor,
            'status' => 'aberta'
        ]);
        $this->compra->produtos()->attach($this->produto->id, [
            'quantidade' => 1,
            'total_unitario' => $this->produto->valor
        ]);
    }

    public function remover_carrinho($id)
    {
        Gate::authorize("acesso-cliente");
        $this->produto = $this->compra->produtos->find($id);
        Compra::whereId($this->compra->id)->update([
            'total' => $this->compra->total - $this->produto->pivot->total_unitario
        ]);
        if ($this->produto->pivot->quantidade == 1){
            $this->compra->produtos()->detach($this->produto->id);
        } else {
            $quantidade = $this->produto->pivot->quantidade - 1;
            $this->compra->produtos()->updateExistingPivot($this->produto->id, ['quantidade' => $quantidade]);
        }
        return redirect('/areaCliente');
        //ver essa rota aí
    }

    public function encerra_compra($id)
    {
        Gate::authorize("acesso-cliente");
        Compra::whereId($id)->update([
            'status' => 'fechada'
        ]);
        return redirect('/pagamento');
        //ver essa rota aí tbm

        //os produto marcados errados provavelmente são carrinho
    }
}
