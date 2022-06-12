<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Produto;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class Graficos extends BaseChart
{
    public ?string $name = 'grafico1';

    public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $nome_produtos = Produto::pluck('nome')->toArray();
        $valores = Produto::pluck('preco');

        return Chartisan::build()
            ->labels($nome_produtos)
            ->dataset('Valores', $valores->toArray());
    }
}
