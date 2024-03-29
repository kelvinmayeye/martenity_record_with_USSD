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
        Schema::table('specialists', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->change();
            $table->bigInteger('specialization_id')->unsigned()->change();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('specialization_id')->references('id')->on('specializations')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialists', function (Blueprint $table) {

        });
    }
};