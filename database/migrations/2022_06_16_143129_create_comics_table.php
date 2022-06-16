<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//crea/aggiunge 
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb');
            $table->float('price', 8, 2);
            $table->string('series', 100);
            $table->string('sale_date',15);
            $table->string('type', 100);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//cancella/togliere l'ultima cosa aggiunta
    {
        Schema::dropIfExists('comics');
    }
}
