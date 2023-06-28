<?php

namespace Database\Factories;
use App\Models\ejerModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ejer1FactoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
            return [
                'id'=>$this->faker->sentence(),
                'name'=>$this->faker->sentence(),
                'descripcion'=>$this->faker->paragraph(),
                'precio'=>$this->faker->randomNumber(5,100),
                'existencias'=>$this->faker->randomNumber(5,100),
                'proveedor'=>$this->faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive ']),
    
            ];
      
    }
}
