<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLibrosTable extends Migration {
public function up() {
Schema::create('libros', function (Blueprint $table) {
 $table->increments('id');
 $table->string('nombre');
 $table->string('resumen');
 $table->integer('npagina');
 $table->integer('edicion');
 $table->string('autor');
 $table->decimal('precio',5,2);
 $table->timestamps();
 });
 }

public function down()
 {
 Schema::dropIfExists('libros');
 } }