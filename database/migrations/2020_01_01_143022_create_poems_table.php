<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoemsTable extends Migration {

	public function up()
	{
		Schema::create('poems', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('poems');
	}
}
