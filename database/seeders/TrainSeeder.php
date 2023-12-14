<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0;$i < 100 ; $i++){
            $new_train = new Train();

            $new_train->brand = $faker->word();
            // la citta di destinazione deve essere sempre diversa da quella di partenza
            $new_train->departure_station = $faker->city();
            
            $new_train->arrival_station = $faker->city();
            if($new_train->departure_station === $new_train->arrival_station ){
                $new_train->arrival_station = $faker->city();
            };
            $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            
            $new_train->arrival_time = $faker->dateTimeBetween($new_train->departure_time, '+1 week');
            $new_train->train_code = $faker->numerify('######');
            $new_train->wagons_number = random_int(1,16);
            $new_train->in_time = $faker->randomElement([false, true]);
            $new_train->suppressed = $faker->randomElement([false, true]);
            // se un treno é stato cancellato non puo essere in orario 
            if($new_train->suppressed === true ) {
                $new_train->in_time = false;
            };
            $new_train->save();
        }
    }
}
