<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

            $table->string('name', 255);
            $table->integer('id_parent')->unsigned()->nullable();
		});

        Schema::table('categories', function($table)
        {
            $table->foreign('id_parent')->references('id')->on('categories')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
