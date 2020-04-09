<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Codinglabs\Roles\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdminRoleTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('bootstrap');
    }

    public function testAdminRoles()
    {
        // arrange
        $user = factory(User::class)->create([
            'name' => 'Kripson',
        ]);

        // act
        $user->roles()->attach(
            Role::whereName('administrator')->first()->id
        );

        // assert
        $this->assertTrue($user->hasRole('administrator'));
    }
}
