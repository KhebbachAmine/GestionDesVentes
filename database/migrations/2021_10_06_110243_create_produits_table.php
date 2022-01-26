<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 25);
            $table->string('marque', 25)->nullable();
            $table->float('prix', 5)->nullable()->default(0.00);
            $table->decimal('qtStock', 5)->nullable()->default(0);
            $table->string('image', 25)->nullable();    
            $table->timestamps();
        });

        //

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
