<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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
            $train->orario_partenza = $faker->date( 'Y-m-d h:i:s');
            $train->orario_arrivo = $faker->date('Y-m-d h:i:s');
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = rand(7, 15);
            $train->in_orario = mt_rand(0, 1);
            $train->cancellato = mt_rand(0, 1);

            $train->save();
        }

        //

    }
}
