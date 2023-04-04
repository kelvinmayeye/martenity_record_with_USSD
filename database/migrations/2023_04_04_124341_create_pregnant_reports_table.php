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
        Schema::create('pregnant_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('maternity_pregnant_id');
            $table->bigInteger('sub_complication_id');
            $table->text('issue');
            $table->smallInteger('is_attended')->default(0);
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
        Schema::dropIfExists('pregnant_reports');
    }
};
