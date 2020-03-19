<?php

use Illuminate\Database\Seeder;
use App\Assessment;

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            Factory(Assessment::class)->create(['section_id' => $i]);
        }
    }
}
