<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $role = \App\Models\Role::first();
            \App\Models\User::factory(10)->create()
                ->each(function($user) use ($role) {
                $user->roles()->sync([$role->id]);
                });
    }
}
