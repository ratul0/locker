<?php

class AreasTableSeeder extends Seeder {

	public function run()
	{
		$areas = [
			[
				'area_name' => 'New york'
			],
			[
				'area_name' => 'Ohio'
			],
			[
				'area_name' => 'Toronto'
			]

		];

		DB::table('areas')->insert($areas);
	}
}