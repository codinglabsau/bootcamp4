<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Codinglabs\Roles\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;
//use PHPUnit\Framework\TestCase;

class StudentRoleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }


    public function testStudentRoles()
    {


        //creating a user using the user factory
        $user = factory(User::class)->create([
            'name' => 'Kripson',
        ]);


        //Assigning the role of student to the user created using the laravel-roles package
        $user->roles()->attach(
            Role::whereName('student')->first()->id
        );

        //testing if the role is assigned properly
        $this->assertTrue($user->hasRole('student'));
    }
}
