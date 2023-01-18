<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for($i=0;$i<50;$i++){
        // istanziare oggetto modello
        $new_train = new Train();
        $new_train->company=$faker->randomElement(['Trenitalia', 'Italo']);
        $new_train->departure_station=$faker->randomElement(['Roma Aurelia','Roma Balduina','Roma Nomentana','Roma Ostiense','Roma Prenestina','Roma San Filippo Neri','Roma San Pietro','Roma Termini','Roma Tiburtina','Roma Trastevere','Roma Tuscolana']);
        $new_train->arrival_station=$faker->randomElement(['Roma Aurelia','Roma Balduina','Roma Nomentana','Roma Ostiense','Roma Prenestina','Roma San Filippo Neri','Roma San Pietro','Roma Termini','Roma Tiburtina','Roma Trastevere','Roma Tuscolana']);
        $new_train->departure_time=$faker->date();
        $new_train->arrival_time=$faker->date();
        $new_train->train_code=$faker->randomNumber(5, false);
        $new_train->wagons_number=$faker->numberBetween(1,14);
        $new_train->in_time=$faker->boolean();
        $new_train->cancelled=$faker->boolean();
        // salva record nel database
        $new_train->save();
        }
    }
}
