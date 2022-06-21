<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //   DB::table('departemens')->insert([
      //      'name' => 'IT'
      //   ]);

      //   DB::table('departemens')->insert([
      //      'name' => 'Finance'
      //   ]);

      //   DB::table('departemens')->insert([
      //      'name' => 'Marketing'
      //   ]);


      $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table departemen menggunakan Faker
    		DB::table('departemens')->insert([
    			'name' => $faker->jobTitle (),

   	]);
    
   }
 
}
}
