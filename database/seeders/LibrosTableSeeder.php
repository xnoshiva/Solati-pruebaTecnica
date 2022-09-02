<?php

namespace Database\Seeders;

use App\Models\Libros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Let's truncate our existing records to start from scratch.
       Libros::truncate();

       $faker = \Faker\Factory::create();

       // And now, let's create a few articles in our database:
       for ($i = 0; $i < 50; $i++) {
           Libros::create([
               'titulo' => $faker->sentence,
               'autor' => $faker->sentence,
               'precio' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
               'cantidad' => $faker->randomNumber($nbDigits = NULL),
              
           ]);
       }
    }
}
