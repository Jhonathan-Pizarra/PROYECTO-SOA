<?php

use Illuminate\Database\Seeder;

use App\Libreria;
use App\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        //Poblar los datos en mi BDD
        
        //LIBRERIA FAKE
        Libreria::truncate(); //datos no se repitan
        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker
        for ($i=0; $i < 15; $i++) {
            //Llamamos un método estático:
            Libreria::create([
                //Atributos $fillable
                'nombre' => $faker -> text($maxNbChars = 20),
                'telefono'=> $faker -> phoneNumber,
                'direccion' => $faker -> address,
            ]);

        }

        //LIBRO FAKE
        Libro::truncate(); //datos no se repitan
        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker
        for ($i=0; $i < 15; $i++) {
           
            //Llamamos un método estático:
            Libro::create([
                //Atributos $fillable
                'titulo' => $faker -> text($maxNbChars = 20),
                'genero'=> $faker -> phoneNumber,
                'anio' => $faker -> address,
                $libro->libreria_id= $faker->unique()->numberBetween(1, 14),

            ]);
        }
        */

        Libreria::truncate(); // EVITAR LA DUPLICIDAD DE DATOS
        $libreria= new Libreria();
        $libreria->nombre="Paraninfo";
        $libreria->telefono="022692352";
        $libreria->direccion="438 Karley Loaf Suite 897";
        $libreria->save();

        $libreria= new Libreria();
        $libreria->nombre="EsiMend";
        $libreria->telefono="022692352";
        $libreria->direccion="439 Karley Loaf Suite 897";
        $libreria->save();

        Libro::truncate();
        $libro= new Libro();
        $libro->titulo="Frankenstein";
        $libro->genero="terror";
        $libro->anio="1960";
        $libro->libreria_id=1;
        $libro->save();

        Libro::truncate();
        $libro= new Libro();
        $libro->titulo="Viaje al centro de la tierra";
        $libro->genero="fantasia";
        $libro->anio="1984";
        $libro->libreria_id=2;
        $libro->save();

    }
}
