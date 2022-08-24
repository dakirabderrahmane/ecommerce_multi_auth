<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$qCS5xYPbPdPaowCCU2U9Iex4w4sO2BVNe3L.EYyIcuUvMarAYUX66', // password
            'remember_token' => Str::random(10),
        ];
    }
}
