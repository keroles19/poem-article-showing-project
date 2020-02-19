<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViewsTable extends Migration {

	public function up()
	{
		Schema::create('views', function(Blueprint $table) {
			$table->increments('id')->primary();
			$table->timestamps();
			$table->string('ip')->unique();
			$table->datetime('date');
			$table->integer('viewable_id');
			$table->string('viewable_type');
		});
	}

	public function down()
	{
		Schema::drop('views');
	}
}
