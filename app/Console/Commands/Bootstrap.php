<?php

namespace App\Console\Commands;

use Codinglabs\Roles\Role;
use Illuminate\Console\Command;

class Bootstrap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bootstrap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bootstraps the application data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // create or update roles for the app
        $roles = [
            [
                'name' => 'administrator',
            ],
        ];

        foreach ($roles as $role) {
            if (!Role::whereName($role['name'])->exists()) {
                Role::create($role);
            }
        }
    }
}
