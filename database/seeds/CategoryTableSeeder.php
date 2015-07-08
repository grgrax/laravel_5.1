<?php

use Faker\Factory as Faker;
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
		$faker = Faker::create();
		DB::table('categories')->insert([
    		'title' => $faker->word,
    		'slug' => $faker->word,
    	]);    
    }
 }
