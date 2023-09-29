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
            $table->unsignedInteger('code')->length(4)->unique();
            $table->string('blood_group')->nullable();
            $table->string('occupation');
            $table->smallInteger('is_active')->length(1)->default(1);
            $table->smallInteger('is_delivered')->length(1)->default(1);
            $table->bigInteger('user_id');
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
