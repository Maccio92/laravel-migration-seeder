<?php
use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->departure_hours = $faker->time();
            $train->arrival_station =  $faker->city();
            $train->arrival_date =  $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_hours =  $faker->time();
            $train->code =  $faker->regexify('[A-Z]{2}[0-5]{3}');
            $train->carriages =  $faker->numberBetween(3,9);
            $train->in_time =  $faker->boolean();
            $train->deleted =  $faker->boolean();
            $train->save();
        }
    }
}
