<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('posts', function (Blueprint $table) {
//
//            $table->after('image', function ($table) {
//                $table->string('address_line1');
//                $table->string('address_line2');
//                $table->string('city');
//
//            });
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('posts', function (Blueprint $table) {
//            $table->dropColumn('address_line1');
//            $table->dropColumn('address_line2');
//            $table->dropColumn('city');
//
//
//        });
    }
};
