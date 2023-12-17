<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNaam extends Migration
{
    /**
     * run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naam', function (Blueprint $table) {
            $table->id();
            $table->string('column1');
            $table->string('column2');
            // hier kun je nieuwe column toevoegen
            $table->string('image')->nullable(); // dit is het nieuwe image regel
            $table->timestamps();
        });
    }

    /**
     * reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naam');
    }
}
