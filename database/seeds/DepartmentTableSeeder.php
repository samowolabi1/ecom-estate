<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        App\Department::create([

            'name' => 'Tech',
        ]);

         App\Department::create([

            'name' => 'Shipping',
        ]);

          App\Department::create([

            'name' => 'IT',
        ]);

         App\Department::create([

            'name' => 'Admin',
        ]);

          App\Department::create([

            'name' => 'Logistics',
        ]);
    }
}
