<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    
    $faker = Faker::create();
    
    for($i=0; $i < 20; $i++){
        \DB::table("personas")->insert(
            array(
                'nombre' => $faker->firstName("male"),
                'apellido' => $faker->lastName,
                'correo' => $faker->email,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             )
           );
        }
    }
}
