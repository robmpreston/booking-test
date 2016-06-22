<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->text('description')->nullable();
		});

        Schema::create('bookings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('date');
            $table->integer('event_id')->unsigned();
            $table->integer('customer_id')->unsigned();
        });

        Schema::create('customers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->enum('gender', [ 'male', 'female' ]);
            $table->integer('weight');
            $table->text('health_problems');
        });

        Schema::create('health_problems', function(Blueprint $table)
        {
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('events');
        Schema::drop('bookings');
        Schema::drop('customers');
        Schema::drop('health_problems');
    }
}
