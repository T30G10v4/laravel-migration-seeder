<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=0;$i<100;$i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->name;
            $newTrain->stazione_di_partenza = $faker->name;
            $newTrain->stazione_di_arrivo = $faker->name;
            $newTrain->data_partenza = $faker->date();
            $newTrain->data_arrivo = $faker->date();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->name;
            $newTrain->numero_carrozze = $faker->randomNumber(2, false);
            $newTrain->in_orario = $faker->randomElement([0, 1]);
            $newTrain->cancellato = $faker->randomElement([0, 1]);
            $newTrain->save();

        }

    }
}
