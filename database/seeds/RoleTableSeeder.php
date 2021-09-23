<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Role::create([

        	'name' => 'SuperAdmin',
        	'description' => 'This role have access over all activities, can read, write, delete and update, it is for the company owner.',
        ]);

        App\Role::create([

        	'name' => 'Admin',
        	'description' => 'This role have access to reports, add user and make some changes,  it is for supervisors.',
        ]);

        App\Role::create([

        	'name' => 'User',
        	'description' => 'This role is for the staffs, they can only create tickets.',
        ]);

    }
}
