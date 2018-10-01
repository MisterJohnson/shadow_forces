<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetatypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metatypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metatype');
            $table->string('traits_label');
            $table->integer('traits_id');
            $table->string('special_points');
            $table->longText('description');
            $table->string('priority_avail');
            $table->string('metatype_parent');
            $table->string('metatype_category');
            $table->integer('attributes_id');
            $table->integer('karma_cost');
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
        Schema::dropIfExists('metatypes');
    }
}
