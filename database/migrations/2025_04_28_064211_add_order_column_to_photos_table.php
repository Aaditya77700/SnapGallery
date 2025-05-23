<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('photos', function (Blueprint $table) {
        $table->integer('order')->default(0); // Add an integer column for order, with a default value of 0
    });
}

public function down()
{
    Schema::table('photos', function (Blueprint $table) {
        $table->dropColumn('order');
    });
}

};
