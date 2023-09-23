<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_razao');
            $table->string('nome_fantasia');
            $table->string('cpf_cnpj');
            $table->string('inscricao_estadual');
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');
            $table->string('outro_telefone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
