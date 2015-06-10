<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_name');
			$table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->string('product_details');
			$table->timestamps();
		});

		Schema::table('products', function($table){
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('category_id')->references('id')->on('users');
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
