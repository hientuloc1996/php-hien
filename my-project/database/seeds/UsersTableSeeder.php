<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert(
                [
                    'name' => $faker->firstName,
                    'email' => $faker->safeEmail,
                    'password' => $faker->numberBetween($min = 1000, $max = 9000),
                ]
            );
        }
    }
}
