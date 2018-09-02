<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('damage_rating');
            $table->longText('description');
            $table->integer('armor_penetration');
            $table->integer('accuracy');
            $table->string('mode');
            $table->string('ammo_capacity');
            $table->integer('recoil_compensation');
            $table->string('range');
            $table->float('cost', 10, 2);
            $table->string('availability');
            $table->string('manufacturer');
            $table->integer('device_rating');
            $table->string('upgrades');
            $table->string('source');
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
        Schema::dropIfExists('weapons');
    }
}
