<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantoMilagrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santo_milagros', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('text');
            $table->string('country');
            $table->string('location');
            $table->json('coordinate');
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
        Schema::dropIfExists('santo_milagros');
    }
}
