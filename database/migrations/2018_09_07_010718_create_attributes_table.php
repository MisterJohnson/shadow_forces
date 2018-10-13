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
            $table->integer('character_id');
            $table->integer('body_min');
            $table->integer('body_max');
            $table->integer('agility_min');
            $table->integer('agility_max');
            $table->integer('reaction_min');
            $table->integer('reaction_max');
            $table->integer('strength_min');
            $table->integer('strength_max');
            $table->integer('willpower_min');
            $table->integer('willpower_max');
            $table->integer('logic_min');
            $table->integer('logic_max');
            $table->integer('intuition_min');
            $table->integer('intuition_max');
            $table->integer('charisma_min');
            $table->integer('charisma_max');
            $table->integer('edge_min');
            $table->integer('edge_max');
            $table->integer('magic');
            $table->string('initiative');
            $table->integer('essence');
            $table->string('movement');
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
