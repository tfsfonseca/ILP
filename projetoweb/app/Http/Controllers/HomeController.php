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

    public function ex1()
    {
        return view('ex1');
    }

    public function result1(Request $request)
    {
        $resultado = $request['valor'] - $request['preco'];
        if ($resultado <0){
            return "Valor pago insuficiente.";
        } elseif ($resultado == 0){
            return "Não há troco.";
        } else {
            return "Troco: R$ $resultado";
        }
    }

    public function ex2()
    {
        return view('ex2');
    }

    public function result2(Request $request)
    {
        $resultado = $request['valor'] * $request['peso'];
        if ($resultado != 0){
            return "O valor final é R$$resultado";}
        else {
            return "Valores inválidos. Tente novamente.";}
    }

    public function ex3()
    {
        return view('ex3');
    }

    public function result3(Request $request)
    {
        if($request['valor'] == 10) {
            return "O valor é igual a 10."; }
        elseif($request['valor'] > 10) {
            return "O valor é maior que 10."; }
        else {
            return "O valor é menor que 10."; }
    }

    public function ex4()
    {
        return view('ex4');
    }

    public function result4(Request $request)
    {
        if($request['valor'] < 0 ){
            return "Valor negativo."; }
        else if ($request['valor'] == 0) {
            return "Valor nulo."; }
        else {
            return "Valor positivo.";
        }
    }

    public function ex5()
    {
        return view('ex5');
    }

    public function result5(Request $request)
    {
        $resultado = ($request['n1'] + $request['n2'] + $request['n3'] + $request['n4']) / 4;
        echo "A média do(a) aluno(a) é $resultado.";
        if($resultado >= 7.0) {
            return "\nAprovado(a)."; }
        else {
            return "\nReprovado(a)"; }
    }
}
