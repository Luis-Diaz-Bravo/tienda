<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_compras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('compra_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->integer('cantidad',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_compras');
    }
}
