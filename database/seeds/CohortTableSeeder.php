<?php

use Illuminate\Database\Seeder;

class CohortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cohort1 = new App\Cohort();		
		$cohort1->cohort = 'lassen';
		$cohort1->save();

		$cohort2 = new App\Cohort();
		$cohort2->cohort = 'mammoth';
		$cohort2->save();

		$cohort3 = new App\Cohort();
		$cohort3->cohort = 'niagra';
		$cohort3->save();

		$cohort3 = new App\Cohort();
		$cohort3->cohort = 'olympic';
		$cohort3->save();

    }
}
