<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();
          //CLAVE FORANEA
            $table->unsignedBigInteger('book_id');
            //la asignamos a la tabla relacionada
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');

            $table->string('username');
            $table->integer('rating');
            $table->text('comment');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opinions');
    }
};
