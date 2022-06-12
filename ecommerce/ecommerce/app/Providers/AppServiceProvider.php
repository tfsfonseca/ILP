<?php

namespace App\Providers;

use App\Charts\Graficos;
use ConsoleTVs\Charts\Registrar;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Registrar $charts)
    {
        //se der problema com o tamanho da tabela, usar o schema
        Schema::defaultStringLength(191);

        //para cada chart, adicionar uma linha NO/DENTRO DO!!!! register
        //coloca uma vírgula depois do class e inclui o nome da classe
        $charts->register([Graficos::class]);


    }
}
