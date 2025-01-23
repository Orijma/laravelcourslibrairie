<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Summary>
 */
class SummaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>  User::factory(), //Recherche d'un id existant dans la table user 
            'title'=>$title = $this->faker->sentence(6),
            'Slug'=>Str::slug($title),
            'content'=>$this->faker->paragraph(), 
        ];
    }
}
