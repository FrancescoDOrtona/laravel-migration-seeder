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
        // Creo un intervallo di tempo in giorni e lo aggiungo alla data di partenza per creare delle date di partenze e arrivo coerenti
        $dataPartenza = $this->faker->dateTimeBetween('now', '+1 week');
        $dayIntervall = $this->faker->numberBetween(0, 3);
        $dataArrivo = clone $dataPartenza;
        $dataArrivo->add(new \DateInterval("P{$dayIntervall}D"));

        // Creo un intervallo di tempo in ore e lo aggiungo all'orario di partenza per creare degli orari coerenti

        $orarioPartenza = $this->faker->time;
        $orarioPartenzaObj = new \DateTime($orarioPartenza);
        $hourIntervall = $this->faker->numberBetween(1, 12);
        $orarioArrivoObj = clone $orarioPartenzaObj;
        $orarioArrivoObj->add(new \DateInterval("PT{$hourIntervall}H"));
        $orarioArrivo = $orarioArrivoObj->format('H:i:s');

        return [
            'azienda' => $this->faker->company,
            'stazione_partenza' => $this->faker->city,
            'stazione_arrivo' => $this->faker->city,
            'data_partenza' => $dataPartenza,
            'data_arrivo' => $dataArrivo,
            'orario_partenza' => $orarioPartenza,
            'orario_arrivo' => $orarioArrivo,
            'codice_treno' => $this->faker->unique()->bothify('???###'),
            'numero_carrozze' => $this->faker->numberBetween(1, 10),
            'in_orario' => $this->faker->boolean,
            'cancellato' => $this->faker->boolean,            
        ];
    }
}
