<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->string('titulo',90);
            $table->string('Descricão',90);
            $table->string('img_path',110);
            $table->decimal('preco');
            $table->date('dt_inicio');
            $table->date('dt_final');
            $table->integer('qtd_maxAlunos');
            $table->timestamps();

            $table->foreign('fk_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
