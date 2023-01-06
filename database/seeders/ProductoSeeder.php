<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        


        Producto::create([
            'descripcion' => 'Blusa Chino Verano 2020',
            'idTipo' => 1,
            'imagen' => 'imagenes/chinaverano.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Terciopelo',
            'idTipo' => 1,
            'imagen' => 'imagenes/blusaterciopelo.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Pantalon',
            'idTipo' => 1,
            'imagen' => 'imagenes/Pantalon.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Tenis',
            'idTipo' => 1,
            'imagen' => 'imagenes/Tenis.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Blusas Primavera',
            'idTipo' => 1,
            'imagen' => 'imagenes/primavera.png',
        ]);

        Producto::create([
            'descripcion' => 'Milan',
            'idTipo' => 1,
            'imagen' => 'imagenes/milan.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Conjunto Primavera',
            'idTipo' => 1,
            'imagen' => 'imagenes/conjuntoprimavera.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Vino Tinto Viña de valbo',
            'idTipo' => 464,
            'imagen' => 'imagenes/binotinto.png',
        ]);

        Producto::create([
            'descripcion' => 'Jean Clasico',
            'idTipo' => 1,
            'imagen' => 'imagenes/jeanclasico.png',
        ]);

        Producto::create([
            'descripcion' => 'Jean Manufacturas',
            'idTipo' => 1,
            'imagen' => 'imagenes/manufacturas.jpg',
        ]);


        Producto::create([
            'descripcion' => 'Atletico',
            'idTipo' => 2,
            'imagen' => 'imagenes/atletico.jpg',
        ]);
        Producto::create([
            'descripcion' => 'Camiseta',
            'idTipo' => 2,
            'imagen' => 'imagenes/camisetaazul.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Corte Ingles',
            'idTipo' => 2,
            'imagen' => 'imagenes/corteingles.jpg',
        ]);
        Producto::create([
            'descripcion' => 'Mundial',
            'idTipo' => 2,
            'imagen' => 'imagenes/mundial.jpg',
        ]);

        Producto::create([
            'descripcion' => 'QATAR',
            'idTipo' => 2,
            'imagen' => 'imagenes/qatar.jpg',
        ]);
        Producto::create([
            'descripcion' => 'Morrison',
            'idTipo' => 2,
            'imagen' => 'imagenes/morrison.jpg',
        ]);
        Producto::create([
            'descripcion' => 'PULL BEAR',
            'idTipo' => 2,
            'imagen' => 'imagenes/pullbear.jpg',
        ]);
        Producto::create([
            'descripcion' => 'Levis',
            'idTipo' => 2,
            'imagen' => 'imagenes/levis.jpg',
        ]);
        Producto::create([
            'descripcion' => 'Levis',
            'idTipo' => 2,
            'imagen' => 'imagenes/levi.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Vino Tinto Viña de valbo',
            'idTipo' => 465,
            'imagen' => 'imagenes/binotinto.png',
        ]);



        Producto::create([
            'descripcion' => 'Vino Tinto Viña de valbo',
            'idTipo' => 466,
            'imagen' => 'imagenes/binotinto.png',
        ]);

       
         Producto::create([
            'descripcion' => 'Vino Blanco Viña de valbo',
            'imagen' => 'imagenes/binoblanco.png',
            'idTipo' => 466,
        ]);

        Producto::create([
            'descripcion' => 'Vino kolber',
            'idTipo' => 466,
            'imagen' => 'imagenes/binotinto.png',
        ]);

        Producto::create([
            'descripcion' => 'Vino de campo ',
            'idTipo' => 466,
            'imagen' => 'imagenes/binotinto.png',
        ]);

        Producto::create([
            'descripcion' => 'Huari Lata',
            'idTipo' => 467,
            'imagen' => 'imagenes/huari.png',
        ]);

        Producto::create([
            'descripcion' => 'Paceña Lata pequeña',
            'idTipo' => 467,
            'imagen' => 'imagenes/Paceña_en_Lata.png',
        ]);

        Producto::create([
            'descripcion' => 'Paceña Lata grande',
            'idTipo' => 467,
            'imagen' => 'imagenes/lata_grande.png',
        ]);

        Producto::create([
            'descripcion' => 'Heiniken Lata Grande',
            'idTipo' => 467,
            'imagen' => 'imagenes/heneyken.jpg',
        ]);

        Producto::create([
            'descripcion' => 'Vino kolber',
            'idTipo' => 468,
            'imagen' => 'imagenes/binotinto.png',
        ]);

        Producto::create([
            'descripcion' => 'Ron Cayana',
            'idTipo' => 468,
            'imagen' => 'imagenes/binotinto.png',
        ]);


        Producto::create([
            'descripcion' => 'ron  de campo',
            'idTipo' => 468,
            'imagen' => 'imagenes/binotinto.png',
        ]);


        Producto::create([
            'descripcion' => 'wiski gran',
            'idTipo' => 469,
            'imagen' => 'imagenes/binotinto.png',
        ]);



    }
}
