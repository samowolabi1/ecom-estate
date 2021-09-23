<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         App\Category::create([

        	'name' => 'Publication',
        ]);



         App\Category::create([

        	'name' => 'Interview',
        ]);



         App\Category::create([

        	'name' => 'News',
        ]);


         App\Category::create([

        	'name' => 'Others',
        ]);
    }
}
