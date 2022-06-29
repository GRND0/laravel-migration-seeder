<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $operatori = [
            'NTV - Italo',
            'Trenitalia',
        ];

        $stazioni = [
            'Roma Termini',
            'Napoli Centrale',
            'Bologna Centale',
            'Firenze S.M.N.',
            'Torino Porta Nuova',
            'Venezia Centrale',
            'Milano Centrale',
        ];

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->operatore = $operatori[rand(0, count($operatori) - 1)];
            $train->stazione_di_partenza = $stazioni[rand(0, count($stazioni) - 1)];
            $train->stazione_di_arrivo = $stazioni[rand(0, count($stazioni) - 1)];
            $train->orario_partenza = '2022\10\05 15:00:05';
            $train->orario_arrivo = '2022\10\05 16:00:05';
            $train->codice_treno = rand(1000, 4000);
            $train->numero_carrozze = rand(7, 15);
            $train->in_orario = mt_rand(0, 1);
            $train->cancellato = mt_rand(0, 1);

            $train->save();
        }

        //

    }
}
