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
        Schema::table('maternity_attendance', function (Blueprint $table) {
            $table->bigInteger('maternity_pregnant_id')->unsigned()->change();
            $table->foreign('maternity_pregnant_id')->references('id')->on('maternity_pregnant')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maternity_attendance', function (Blueprint $table) {
            //
        });
    }
};
