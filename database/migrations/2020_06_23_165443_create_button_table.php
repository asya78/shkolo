<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButtonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('button', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',200);
            $table->string('link')->unique()->nullable();
            $table->enum('color',['white','red','blue','black','orange','green'])->default('white');
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
        Schema::dropIfExists('button');
    }
}