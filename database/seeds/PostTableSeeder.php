<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;



class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		// factory('App\Post', 50)->create()->each(function($p) {
		//         $p->posts()->save(factory('App\Post')->make());
		//     });
        
        $faker = Faker::create();
        DB::table('posts')->insert([
            'name' => $faker->lastName,
            'email' => $faker->freeEmail,
          'password' => bcrypt('secret'),
        ]); 
    }
}
