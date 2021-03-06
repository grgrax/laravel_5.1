<?php

use Faker\Factory as Faker;
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

        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => $faker->lastName,
            'email' => $faker->freeEmail,
          'password' => bcrypt('secret'),
        ]);    

    }
}
