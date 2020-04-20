<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('brgy');
            $table->string('street');
            $table->string('house_number');
            $table->string('family_name');
            $table->string('gender_head_family');
            $table->string('bod_head_family');
            $table->string('head_family');
            $table->string('spouse')->nullable();
            $table->string('gender_spouse')->nullable();
            $table->string('bod_spouse')->nullable();
            $table->string('first_child');
            $table->string('gender_first_child');
            $table->string('bod_first_child');
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
        Schema::dropIfExists('families');
    }
}
