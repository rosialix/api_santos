<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantoSantosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santo_santos', function (Blueprint $table) {
            $table->id('id');
            $table->string('santo_name');
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->date('birth_of_death');
            $table->string('country');
            $table->string('location');
            $table->float('latitude',10,6);
            $table->float('longitude',10,6);
            $table->text('biography');
            $table->string('galeria');

            $table->foreignId('santo_santuario_id')->nullable()->constrained();

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
        Schema::dropIfExists('santo_santos');
    }
}
