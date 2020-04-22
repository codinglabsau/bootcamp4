<?php

use Illuminate\Database\Seeder;

use App\Course;
use App\Section;
use App\Lesson;
use App\Assessment;
use App\AssessmentItem;
use App\Enrolment;
use App\EnrolmentLesson;
use App\EnrolmentAssessmentItem;
use Codinglabs\Roles\Role;

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
        $admin = factory(\App\User::class)->create([
            'email' => 'administrator@bootcamp4.test',
        ]);
        $admin->roles()->attach(Role::whereName('administrator')->first());

        $student = factory(\App\User::class)->create([
            'email' => 'student@bootcamp4.test',
        ]);
        $student->roles()->attach(Role::whereName('student')->first());

        // Seed Courses
        factory(Course::class)->create(['name' => 'Become a Developer in 12 Days']);
        factory(Course::class)->create(['name' => 'Laravel Developer Bootcamp']);

        // Seed Sections
        Course::all()->map(function ($course) {
            factory(Section::class, 12)->create(['course_id' => $course->id]);
        });

        // Seed Lessons and Assessments
        Section::all()->map(function ($section) {
            factory(Lesson::class, 5)->create(['section_id' => $section->id]);
            factory(Assessment::class)->create(['section_id' => $section->id]);
        });

        // Seed AssessmentItems
        Assessment::all()->map(function ($assessment) {
            factory(AssessmentItem::class, 2)->create(['assessment_id' => $assessment->id]);
        });

        // Enrol a student into a course
        factory(Enrolment::class)->create(['user_id' => $student->id, 'course_id' => Course::all()->first()->id]);

        // Simulate 50% completion for student.
        $enrolment = $student->enrolments->last();
        $enrolment->course->sections->take($enrolment->course->sections->count() / 2)->map(function ($section) use ($enrolment){
            $section->lessons->map(function ($lesson) use ($enrolment){
                // Seed completed Lessons
               factory(EnrolmentLesson::class)->create(['enrolment_id' => $enrolment->id, 'lesson_id' => $lesson->id]);
            });
            $section->assessment->assessmentItems->map(function ($assessmentItem) use ($enrolment) {
                // Seed completed AssessmentItems
                factory(EnrolmentAssessmentItem::class)->create(['enrolment_id' => $enrolment->id,
                    'assessment_item_id' => $assessmentItem->id]);
            });
        });
    }
}
