<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Train::create([
            'azienda' => 'Trenitalia',
            'stazione_partenza' => 'Roma',
            'stazione_arrivo' => 'Milano',
            'orario_partenza' => '08:00:00',
            'orario_arrivo' => '17:00:00',
            'codice_treno' => '123ABC',
            'numero_carrozze' => 3,
            'in_orario' => true,
            'cancellato' => false,
        ]);
    }
}
