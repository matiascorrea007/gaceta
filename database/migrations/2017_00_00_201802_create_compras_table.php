<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
           
            $table->increments('id');

            $table->integer('provedore_id')->unsigned();
            $table->foreign('provedore_id')->references('id')->on('provedores')->onDelete('cascade');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->string('pago_tipo');
            $table->string('comentario');
            $table->string('total');
            $table->string('status');
            $table->string('entregado');
            $table->string('numero_factura');
            $table->integer('ivatipo_id')->unsigned();
            $table->float('gasto_envio');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
