<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBudgetProductsTable.
 */
class CreateBudgetProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('budget_products', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('budget_id')->unsigned();
            $table->foreign('budget_id')->references('id')->on('budgets');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('technical_id')->unsigned()->nullable();
            $table->foreign('technical_id')->references('id')->on('technical_specifications');
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('budget_products');
	}
}
