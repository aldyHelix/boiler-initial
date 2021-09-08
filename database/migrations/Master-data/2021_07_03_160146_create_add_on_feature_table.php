<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddOnFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_on_feature', function (Blueprint $table) {
            $table->id();
            $table->string('add_on_code');
            $table->string('add_on_title');
            $table->string('add_on_image');
            $table->string('add_on_feature_name');
            $table->bigInteger('add_on_price');
            $table->integer('add_on_quantity');
            $table->text('add_on_description');
            $table->tinyInteger('is_active')->default(1);
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
        Schema::dropIfExists('add_on_feature');
    }
}
