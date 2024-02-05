<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; //per inserire dati che voglio inserire

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //ciclo per 50 treni e creo nuovo modello 
        for( $i=0 ; $i < 50 ; $i++){
            $newTrain = new Train(); //importato train via namespace
            $newTrain->name_company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Za-z0-9]{20}');
            $newTrain->carriage_nr = $faker->numberBetween(1,30);
            $newTrain->on_time = $faker->boolean(50);
            $newTrain->cancelled = $faker->boolean(10);
            //salviamo il dato (inseriamolo nel DatabaseSeeder)
            $newTrain-> save();
        }
    }
}
