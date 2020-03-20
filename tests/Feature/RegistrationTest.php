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
     * Tests that a user is registered and can access 
     *
     * @return void
     */
    public function testAUserCanRegister()
    {
        $this->seed('RoleTableSeeder');
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create(['name' => 'John Smith', 'email' => 'student@email.com']);

        $response = $this->actingAs($user)->get('/home');

        $response->assertViewIs('home');
    }
}
