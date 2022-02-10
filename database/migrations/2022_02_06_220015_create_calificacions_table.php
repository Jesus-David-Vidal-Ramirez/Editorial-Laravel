<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_Usuario');
            $table->unsignedBigInteger('Id_Libro');
            $table->foreign("Id_Usuario")->references('id')->on('users')->onDelete("cascade")
            ->onUpdate("cascade"); 
            $table->foreign("Id_Libro")->references('id')->on('libros')->onDelete("cascade")
            ->onUpdate("cascade"); 
            $table->double('calificacion', 8,2);
            $table->text('comentario');
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
        Schema::dropIfExists('calificacions');
    }
}
