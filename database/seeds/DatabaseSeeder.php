<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('events')->insert([
            'name' => 'Skydiving - Tandem',
			'description' => 'Give the gift of an extreme adrenaline rush!'
        ]);

		DB::table('health_problems')->insert([
			'name' => 'High Blood Pressure'
		], [
			'name' => 'Epilepsy'
		], [
			'name' => 'Arthritis'
		]);
	}

}
