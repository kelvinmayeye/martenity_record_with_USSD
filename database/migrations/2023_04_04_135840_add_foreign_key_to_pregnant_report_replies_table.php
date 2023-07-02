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
        Schema::table('pregnant_report_replies', function (Blueprint $table) {
            $table->bigInteger('pregnant_report_id')->unsigned()->change();
            $table->bigInteger('specialist_id')->unsigned()->change();

            $table->foreign('pregnant_report_id')->references('id')->on('pregnant_reports')->onDelete('restrict');
            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pregnant_report_replies', function (Blueprint $table) {
            //
        });
    }
};
