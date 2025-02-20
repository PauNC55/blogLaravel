<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

class postsFaker extends Seeder
{

    public function run(): void
    {

        $faker = Faker::create();
        $post = new Post();

        $post->titulo = $faker->randomElement(['Noche','Día','Mañana', 'Tarde']);
        $post->contenido = $faker->randomElement(['Correr', 'Leer', 'Meditar', 'Jardinería', 'Desayunar', 'Pasear en bicicleta', 'Pintar', 'Cocinar', 'Jugar videojuegos', 'Practicar deportes', 'Ver películas', 'Escribir', 'Escuchar música', 'Observar las estrellas', 'Hacer manualidades', 'Viajar', 'Fotografía', 'Aprender idiomas', 'Hacer senderismo', 'Reunirse con amigos']);;
        $post->user_id = 1;
        $post->save(); 
        

        $post2 = new Post();

        $post2->titulo = $faker->randomElement(['Noche','Día','Mañana', 'Tarde']);
        $post2->contenido = $faker->randomElement(['Correr', 'Leer', 'Meditar', 'Jardinería', 'Desayunar', 'Pasear en bicicleta', 'Pintar', 'Cocinar', 'Jugar videojuegos', 'Practicar deportes', 'Ver películas', 'Escribir', 'Escuchar música', 'Observar las estrellas', 'Hacer manualidades', 'Viajar', 'Fotografía', 'Aprender idiomas', 'Hacer senderismo', 'Reunirse con amigos']);;
        $post2->user_id = 2;
        $post2->save(); 

        $post3 = new Post();

        $post3->titulo = $faker->randomElement(['Noche','Día','Mañana', 'Tarde']);
        $post3->contenido = $faker->randomElement(['Correr', 'Leer', 'Meditar', 'Jardinería', 'Desayunar', 'Pasear en bicicleta', 'Pintar', 'Cocinar', 'Jugar videojuegos', 'Practicar deportes', 'Ver películas', 'Escribir', 'Escuchar música', 'Observar las estrellas', 'Hacer manualidades', 'Viajar', 'Fotografía', 'Aprender idiomas', 'Hacer senderismo', 'Reunirse con amigos']);;
        $post3->user_id = 3;
        $post3->save(); 
        
    }

}
