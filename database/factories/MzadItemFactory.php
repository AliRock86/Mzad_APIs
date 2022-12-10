<?php

namespace Database\Factories;

use App\Models\MzadItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class MzadItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MzadItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' => $this->faker->name,
        ];
    }
}
