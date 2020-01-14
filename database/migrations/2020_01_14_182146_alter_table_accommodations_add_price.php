<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableAccommodationsAddPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accommodations', function (Blueprint $table) {
            $table->string('dbl')->nullable();
            $table->string('sgl')->nullable();
            $table->string('dbl_balcony')->nullable();
            $table->string('sgl_balcony')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accommodations', function (Blueprint $table) {
            $table->dropColumn('dbl');
            $table->dropColumn('sgl');
            $table->dropColumn('dbl_balcony');
            $table->dropColumn('sgl_balcony');
        });
    }
}
