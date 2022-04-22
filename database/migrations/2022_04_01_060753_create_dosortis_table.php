<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosortisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosortis', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable();
            $table->string('destination');
            $table->string('intitule');
            $table->string('file')->nullable();
            $table->string('type');
            $table->string('genre');
            $table->string('date');
            $table->string('observation')->nullable();
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
        Schema::dropIfExists('dosortis');
    }
}
