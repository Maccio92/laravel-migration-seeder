<?php

use Illuminate\Database\Seeder;
use App\Train;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TrainSeeder::class);
    }
}
