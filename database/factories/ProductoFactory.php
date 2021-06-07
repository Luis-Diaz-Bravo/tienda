<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre' => $this->faker->word(),
          'descripcion' => $this->faker->sentence(7, true),
          'precio_unidad' => $this->faker->randomFloat(2,0.1,100),
          'existencia' => $this->faker->numberBetween(0,500),
          'imagen' => 'img/' . $this->faker->image('public/img', 400, 300, null, false),
        ];
    }
}
