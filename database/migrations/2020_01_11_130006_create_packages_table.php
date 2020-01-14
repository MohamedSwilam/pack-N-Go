<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('description', 5000)->nullable();
            $table->double('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('season')->nullable();
            $table->integer('days')->nullable();
            $table->integer('nights')->nullable();
            $table->integer('rate')->nullable();
            $table->date('date')->nullable();
            $table->boolean('home_page')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
