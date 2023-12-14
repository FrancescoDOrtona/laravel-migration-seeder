<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    protected $model = Train::class;
    public function definition()
    {
        return [
            'azienda' => $this->faker->company,
            'stazione_partenza' => $this->faker->city,
            'stazione_arrivo' => $this->faker->city,
            'orario_partenza' => $this->faker->time,
            'orario_arrivo' => $this->faker->time,
            'codice_treno' => $this->faker->unique()->bothify('???###'),
            'numero_carrozze' => $this->faker->numberBetween(1, 10),
            'in_orario' => $this->faker->boolean,
            'cancellato' => $this->faker->boolean,            
        ];
    }
}
