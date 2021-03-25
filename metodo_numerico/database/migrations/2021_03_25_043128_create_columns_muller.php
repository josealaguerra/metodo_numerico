<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsMuller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('muller', function (Blueprint $table) {
            //
            $table->decimal('x', $precision = 15, $scale = 15);
            $table->decimal('fx', $precision = 15, $scale = 15);
            $table->decimal('fx1', $precision = 15, $scale = 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('muller', function (Blueprint $table) {
            //
            $table->dropColumn('x');
            $table->decimal('fx');
            $table->decimal('fx1');
        });
    }
}
