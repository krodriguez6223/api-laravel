<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    
    for($i=0; $i < 20; $i++){
        \DB::table("producto")->insert(
            array(
                'nombre' => $faker->name,
                'cantidad' => $faker->randomDigit,
                'precio' => $faker->numberBetween(1,50),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             )
            );
        }
    }
}
