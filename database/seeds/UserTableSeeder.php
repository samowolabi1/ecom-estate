<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
	            'role_id' => 1,
                'department_id' => 1,
	            'name' => 'Sam High',
                'staffno' => 'VI112',
	            'email' => 'admin@vistaafrica.com',
	            'others' => 'Any other information',
	            'status' => 'Active',
	            'password' => \Hash::make('password'),
	        ]);

        App\User::create([
                'role_id' => 2,
                'department_id' => 3,
                'name' => 'Edet Sky',
                'staffno' => 'VI113',
                'email' => 'edet@vistaafrica.com',
                'others' => 'Any other information',
                'status' => 'Active',
                'password' => \Hash::make('password'),
            ]);


        App\User::create([
                'role_id' => 3,
                'department_id' => 3,
                'name' => 'Mark',
                'staffno' => 'VI114',
                'email' => 'mark@vistaafrica.com',
                'others' => 'Any other information',
                'status' => 'Active',
                'password' => \Hash::make('password'),
            ]);

    }
}
