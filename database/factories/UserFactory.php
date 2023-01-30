<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pnum = 0332;
        $fakenNum = fake()->numerify('#######');
        return [
            'username' => fake()->userName(),
            'fname' => fake()->firstName('male'|'female'),
            'lname' => fake()->lastName,
            'email' => fake()->safeEmail(),
            'pnum' => $pnum.$fakenNum,
            'password' => Hash::make('1qw23er45t'), // password
            'remember_token' => Str::random(10),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
