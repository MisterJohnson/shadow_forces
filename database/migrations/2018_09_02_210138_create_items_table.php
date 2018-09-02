<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('device_rating');
            $table->longText('description');
            $table->string('availability');
            $table->float('cost', 10, 2);
            $table->string('capacity');
            $table->integer('rating_max');
            $table->string('source');
            $table->string('category');
            $table->boolean('is_cost_dynamic');
            $table->boolean('is_avail_dynamic');
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
        Schema::dropIfExists('items');
    }
}
