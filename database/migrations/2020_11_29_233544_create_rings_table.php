<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rings', function (Blueprint $table) {
            $table->id();
            $table->string('ring_description');
            $table->string('ring_reference');
            $table->string('ring_material');
            $table->string('ring_preview')->nullable();

            $table->integer('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('rings');
    }
}
