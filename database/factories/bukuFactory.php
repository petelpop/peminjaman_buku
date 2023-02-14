<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\buku>
 */
class bukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this -> faker -> name(),
            'nama_buku' => $this -> faker -> sentence(),
            'status' => $this -> faker -> randomNumber(2) 
        ];
    }
}
