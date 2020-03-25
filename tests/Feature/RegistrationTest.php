<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RegistrationTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;
    /**
     * Tests that a user is able to register with the website.
     *
     * @return void
     */
    public function testAUserIsSuccessfullyRegistered()
    {
        $this->seed('RoleTableSeeder');

        $user = factory(User::class)->create(['name' => 'John Smith', 'email' => 'student@email.com']);
        $lastEnteredUser = User::all()->last();

        $this->assertNotNull($lastEnteredUser);
        $this->assertEquals($user->name, $lastEnteredUser->name);
        $this->assertEquals($user->email, $lastEnteredUser->email);
    }

    /**
     * Tests that a registered user is able to access content.
     */
    public function testARegisteredUserCanAccessContent() {
        $this->seed('RoleTableSeeder');

        $user = factory(User::class)->create(['name' => 'John Smith', 'email' => 'student@email.com']);
        $response = $this->actingAs($user)->get('/home');

        $response->assertViewIs('home');
    }
}
