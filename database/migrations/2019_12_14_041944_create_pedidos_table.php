g q<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();            
            $table->boolean('confirmada'); 
            $table->date('data_aula');
            $table->string('local_aula');
            $table->string('horario_aula');
            $table->string('descricao_aula');

            $table->unsignedBigInteger('id_aluno');
            $table->unsignedBigInteger('id_professor');


            $table->foreign('id_aluno')->references('id')->on('users');            
            $table->foreign('id_professor')->references('id')->on('professors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
