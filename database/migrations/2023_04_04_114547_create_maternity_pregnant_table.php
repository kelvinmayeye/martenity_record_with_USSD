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
        Schema::create('maternity_pregnant', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('maternity_patient_id');
            $table->smallInteger('is_delivered')->length(1)->default(1);
            $table->date('due_date');
            $table->Integer('num_fetuses')->nullable();
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
        Schema::dropIfExists('maternity_pregnant');
    }
};
