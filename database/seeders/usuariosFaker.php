<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;


class usuariosFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $usuario = new User();
        $usuario->name = $faker->firstNameMale;
        //para que no haya mucha confusión, voy a hacer un bcrypt con admin para todos los usuarios
        $usuario->password = bcrypt('admin');
        $usuario->save();
    }
}
