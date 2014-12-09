<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        User::create([
            'name' => 'admin',
            'user' => 'admin',
            'password' => \Hash::make('1234'),
            'first_name' => 'admin',
            'email' => 'admin@richisystem.com'

        ]);


        foreach (range(1, 100) as $index) {
            User::create([
                'name' => $faker->name,
                'user' => $faker->userName,
                'password' => \Hash::make('1234'),
                'first_name' =>$faker->firstName,
                'email' => $faker->email


            ]);
        }
    }

}