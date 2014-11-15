<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('automovil',function($table){
			$table->increments('id');
			$table->string('color');
			$table->string('tipo');
			$table->string('capacidad');
			$table->string('km/gal');
			$table->string('vel_max');
			$table->string('proveedor');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('automovil');
	}

}