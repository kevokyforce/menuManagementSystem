<?php

namespace Database\Factories;

use App\Models\Subsubmenu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubsubmenuFactory extends Factory
{
    protected $model = Subsubmenu::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'uuid' => Str::uuid(),
            'submenu_id' => null, 
        ];
    }
}

