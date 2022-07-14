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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_user');
            $table->unsignedBigInteger('fk_curso');
            $table->date('dt_register');
            $table->enum('status',['pago','pendente','cancelado']);
            


            $table->timestamps();

            $table->foreign('fk_user')->references('id')->on('users');
            $table->foreign('fk_curso')->references('id')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
