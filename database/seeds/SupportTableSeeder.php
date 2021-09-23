<?php

use Illuminate\Database\Seeder;

class SupportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
        App\Support::create([
            'user_id' => 1,
            'name' => 'Sam',
        ]);


        App\Support::create([
            'user_id' => 2,
            'name' => 'Edet',
        ]);
    }
}
