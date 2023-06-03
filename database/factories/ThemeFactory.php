<?php

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ThemeFactory extends Factory
{
    protected $model = Theme::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(),
        ];
    }
}