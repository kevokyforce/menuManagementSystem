<?php

namespace Database\Factories;

use App\Models\Submenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubmenuFactory extends Factory
{
    protected $model = Submenu::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'uuid' => Str::uuid(),
            'menu_id' => null,  
        ];
    }
}

