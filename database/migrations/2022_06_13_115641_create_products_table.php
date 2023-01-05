<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
			$table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->string('tag');
            $table->string('category');
            $table->string('shop');
            $table->text('abstract');
            $table->text('purpose');
            $table->date('date')->nullable();
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
        Schema::drop('products');
    }
}
