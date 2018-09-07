<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priority', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magic_id');
            $table->string('metatype');
            $table->integer('base_edge');
            $table->integer('base_magic');
            $table->integer('karma_cost');
            $table->integer('attributes');
            $table->string('magic_skill_chosen');
            $table->string('skills');
            $table->string('resources');
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
        Schema::dropIfExists('priority');
    }
}
