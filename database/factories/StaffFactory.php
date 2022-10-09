<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */

use Illuminate\Support\Str;

class StaffFactory extends Factory
{

    protected $model = Staff::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'staff_no' => fake()->unique()->randomDigit(),
            'staff_name' => fake()->name(),
            'description' => fake()->jobTitle(),

        ];
    }
}
