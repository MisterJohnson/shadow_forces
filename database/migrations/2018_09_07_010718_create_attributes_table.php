<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('body');
            $table->integer('agility');
            $table->integer('reaction');
            $table->integer('strength');
            $table->integer('willpower');
            $table->integer('logic');
            $table->integer('intuition');
            $table->integer('charisma');
            $table->integer('edge');
            $table->integer('magic');
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
        Schema::dropIfExists('attributes');
    }
}
