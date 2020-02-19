<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('comment');
			$table->string('name');
			$table->string('email');
			$table->integer('comentable_id');
			$table->string('comentable_type');
			$table->boolean('status')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
