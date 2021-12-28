<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCochesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_propietario')->unsigned()->nullable();
            $table->string('marca',50);
            $table->string('modelo',25);
            $table->string('color',25);
            $table->timestamps();

            $table->foreign('id_propietario')->references('id')->on('propietarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coches');
    }
}
