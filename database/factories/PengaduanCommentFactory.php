<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PengaduanCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->paragraph,
            'pengaduan_id' => $this->faker->numberBetween(1, 50),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
