<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->integer('Id_Libro');
            $table->string('nombre');
            $table->string('autor');
            $table->string('editorial');
            $table->text('descripcion');
            $table->text('descripcion_detallada');
            $table->string('imagen');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->date('lanzamiento');
            $table->integer('descuento');
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
        Schema::dropIfExists('libros');
    }
}
