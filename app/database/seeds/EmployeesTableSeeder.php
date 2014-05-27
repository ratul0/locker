<?php

class EmployeesTableSeeder extends Seeder {

	public function run()
	{
		$employee = array(
			array(
				'name'  =>'zidan',
				'salary'      =>300000
			),
			array(
				'name'  =>'ronaldo',
				'salary'      =>250000
			),
			array(
				'name'  =>'benzema',
				'salary'      =>150000
			),
		);

		DB::table('employees')->insert($employee);
	}
}