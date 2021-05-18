<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlteraClienteAdicionaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compras', function(Blueprint $table){
            $table->foreignId('id_cliente')->constantained('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('compras', function(Blueprint $table){
            $table->dropForeign(['id_cliente']);
            $table->dropColumn('id_cliente');
        });
    }
}
