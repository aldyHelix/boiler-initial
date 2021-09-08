<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribtionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribtions', function (Blueprint $table) {
            $table->id();
            $table->string('subs_code');
            $table->string('subs_title');
            $table->string('subs_image');
            $table->string('subs_cycle');
            $table->bigInteger('subs_price');
            $table->string('subs_days_validity');
            $table->text('subs_description');
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_renewal')->default(0);
            $table->tinyInteger('is_upgrade')->default(0);
            $table->tinyInteger('is_downgrade')->default(0);
            $table->dateTime('expired_at');
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
        Schema::dropIfExists('subscribtions');
    }
}
