<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Codinglabs\Roles\Role;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AdminRoleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use DatabaseMigrations;

    public function testAdminRoles()
    {
        // arrange
        Role::create(['name' => 'administrator']);

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
