<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'premuim' => '0',
            'name' => $faker->lastName,
            'lastname' => $faker->firstName,
            'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'role' => 'user',
            'phone' => $faker->phoneNumber,
            'cpostal' => $faker->postcode,
            'ville' => $faker->city,
            'adresse' => $faker->address,
            'email' => $faker->unique()->email,
            'password' => bcrypt('123456'),
        ];
    }
}

