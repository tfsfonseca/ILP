<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'categoria_id',
        'fornecedor_id',
        'preco',
        'quantidade'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class);
    }

}
