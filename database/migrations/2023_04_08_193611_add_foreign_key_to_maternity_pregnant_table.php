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
        Schema::table('maternity_pregnant', function (Blueprint $table) {
            $table->bigInteger('maternity_patient_id')->unsigned()->change();
            $table->foreign('maternity_patient_id')->references('id')->on('maternity_patients')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maternity_pregnant', function (Blueprint $table) {
            //
        });
    }
};
