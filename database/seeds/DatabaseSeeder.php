<?php

use Illuminate\Database\Seeder;

use Codinglabs\Roles\Role;
use App\Lesson;
use App\Assessment;
use App\AssessmentItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Artisan::call('bootstrap');

        // Seed Users

        // Seed Courses

        // Seed Sections

        /*
         * Jay is doing Users, Courses and Sections and has said that he seeds 12 sections so the loop seeds 5 Lessons,
         * an Assessment and 2 AssessmentItems for each Section
         */

//                for ($i = 1; $i <= 12; $i++) {
//                    // Seed Lessons
//                    factory(Lesson::class, 5)->create(['section_id' => $i]);
//
//                    // Seed Assessments
//                    factory(Assessment::class)->create(['section_id' => $i]);
//
//                    // Seed AssessmentItems
//                    factory(AssessmentItem::class, 2)->create(['assessment_id' => $i]);
//                }
    }
}
