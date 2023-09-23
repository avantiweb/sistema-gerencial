<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_razao',
        'nome_fantasia',
        'cpf_cnpj',
        'inscricao_estadual',
        'cep',
        'endereco',
        'bairro',
        'numero',
        'cidade',
        'estado',
        'telefone',
        'outro_telefone'
    ];
}
