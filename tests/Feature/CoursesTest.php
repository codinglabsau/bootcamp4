<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Course;
use App\Section;
use App\Enrolment;

class CoursesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function course_is_displayed_with_first_six_sections()
    {
        $user = factory(User::class)->create();
        $course = factory(Course::class)->create();
        factory(Section::class, 12)->create(['course_id' => $course->id]);

        $response = $this->get($course->path());

        $response->assertStatus(200);
        $response->assertSee($course->name);
        foreach ($course->sections->take(6) as $section)
            $response->assertSeeInOrder([$section->name, $section->overview]);
    }

    /** @test */
    public function guests_are_displayed_information_section()
    {
        $user = factory(User::class)->create();
        $course = factory(Course::class)->create();
        factory(Enrolment::class)->create(['user_id' => $user->id, 'course_id' => $course->id]);

        $response = $this->get($course->path());

        $response->assertStatus(200);
        $response->assertSeeInOrder(['To access this course content please', 'Login', 'Register.']);
    }

    /** @test */
    public function students_are_displayed_information_section_if_they_dont_have_access_to_course()
    {
        $user = factory(User::class)->create();
        $courses = factory(Course::class, 2)->create();
        factory(Enrolment::class)->create(['user_id' => $user->id, 'course_id' => $courses->first()->id]);
        $this->actingAs($user);

        $response = $this->get($courses->last()->path());

        $response->assertStatus(200);
        $response->assertSeeInOrder([
            'You do not have access to this course content. To purchase this course, click', 'here.'
        ]);
    }
}
