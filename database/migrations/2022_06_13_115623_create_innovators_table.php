<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInnovatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovators', function (Blueprint $table) {
			$table->increments('id');
            $table->string('image');
            $table->string('iname');
            $table->string('tag');
            $table->string('position');
            $table->text('about');
            $table->text('accomplishments');
            $table->date('date')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
			$table->string('active')->default(1);
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
        Schema::drop('innovators');
    }
}
