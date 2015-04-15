<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePromosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->string('name', 255);
            $table->text('description');
            $table->dateTime('valid_until');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promos');
	}

}
