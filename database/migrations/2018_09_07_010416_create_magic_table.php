<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('magic_attribute');
            $table->string('magic_attribute_grade');
            $table->integer('number_of_skills');
            $table->integer('skill_rating');
            $table->integer('number_free_spell');
            $table->string('label');
            $table->longText('description');
            $table->boolean('is_resonance');
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
        Schema::dropIfExists('magic');
    }
}
