<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magic_id');
            $table->integer('starting_attributes_id');
            $table->integer('final_attributes_id');
            $table->float('essence');
            $table->integer('starting_karma');
            $table->integer('total_karma');
            $table->integer('qualities_id');
            $table->integer('gears_id');
            $table->integer('skills_id');
            $table->integer('augment_id');
            $table->integer('armor_id');
            $table->integer('weapon_id');
            $table->integer('matrix_id');
            $table->integer('vehicules_id');
            $table->integer('socials_id');
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
        Schema::dropIfExists('character');
    }
}
