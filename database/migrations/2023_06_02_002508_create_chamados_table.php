<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('setor_id');
            $table->unsignedBigInteger('situacao_id');
            $table->string('titulo');
            $table->text('descricao');
            $table->date('prazo_termino');
            $table->timestamps();

            $table->foreign('setor_id')->references('id')->on('setores');
            $table->foreign('situacao_id')->references('id')->on('situacoes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
