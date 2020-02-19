<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutsTable extends Migration {

	public function up()
	{
		Schema::create('abouts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->string('name');
			$table->string('address');
			$table->date('date_of_birth');
			$table->string('education');
			$table->string('hoppy');
			$table->string('work');
			$table->string('fb_link');
			$table->string('tw_link');
			$table->string('fb_page_link');
			$table->string('phone');
		});
	}

	public function down()
	{
		Schema::drop('abouts');
	}
}