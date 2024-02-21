<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chollos', function (Blueprint $table) {
           $table->id();// UNSIGNED BIGINT AUTOINC.
           $table->string('titulo'); // VARCHAR
           $table->string('descripcion');
           $table->string('url');
           $table->string('categoria');
           $table->integer('puntuacion');            //INT
           $table->double('precio');
           $table->double('precio_descuento');
           $table->boolean('disponible')->default(true); // Establece un valor por defecto de 'true'
           // La siguiente línea crea campos created_at y updated_at. Si la borras
           // esos campos no existirán en tu tabla
           $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('chollos');
    }
};
