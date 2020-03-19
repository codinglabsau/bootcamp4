<?php

use Illuminate\Database\Seeder;

class AssessmentItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            Factory(AssessmentItem::class, 2)->create(['assessment_id' => $i]);
        }
    }
}
