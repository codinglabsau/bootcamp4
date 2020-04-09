<?php

namespace Tests\Commands;

use Tests\TestCase;
use Codinglabs\Roles\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BootstrapTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_creates_roles_for_applications()
    {
        $this->artisan('bootstrap');

        $this->assertDatabaseHas('roles', [
            'name' => 'administrator'
        ]);
    }

    /** @test */
    public function it_does_not_duplicate_roles()
    {
        Role::create(['name' => 'administrator']);

        $this->artisan('bootstrap');

        $this->assertEquals(1, Role::whereName('administrator')->count());
    }
}
