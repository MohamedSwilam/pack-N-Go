<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePackagesAddRoomTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->string('dbl')->nullable();
            $table->string('tbl')->nullable();
            $table->string('sgl')->nullable();
            $table->string('child')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('dbl');
            $table->dropColumn('tbl');
            $table->dropColumn('sgl');
            $table->dropColumn('child');
        });
    }
}
