<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('idcli');
        $table->unsignedBigInteger('idpro');
        $table->decimal('qtevente', 5);
        $table->date('datevente');
        $table->float('prixvente', 5);
        $table->foreign('idcli')->references('id')->on('clients');
        $table->foreign('idpro')->references('id')->on('produits');
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
        Schema::dropIfExists('ventes');
    }
}
