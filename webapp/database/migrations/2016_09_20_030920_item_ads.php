<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('item_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('tittle');
            $table->string('description');
            $table->string('picture');
            $table->integer('nohp');
            $table->string('city');
            $table->boolean('sold');
            $table->boolean('published');
            $table->timestamp('create_ad');
            $table->timestamp('update_ad');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
