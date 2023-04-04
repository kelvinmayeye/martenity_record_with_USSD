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
        Schema::create('maternity_attendance', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("maternity_pregnant_id");
            $table->enum('type', ['prenatal', 'postnatal']);
            $table->decimal('weight', 3, 2)->nullable();
            $table->text('description');
            $table->bigInteger('specialist_id');
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
        Schema::dropIfExists('maternity_attendance');
    }
};
