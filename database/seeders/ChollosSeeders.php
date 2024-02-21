<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChollosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('chollos')->insert([
        [
            'titulo' => 'iPhone 13 128GB - Azul - Libre',
            'descripcion' => 'Reacondicionador certificado

            Los dispositivos reacondicionados son como nuevos pero mejores para el planeta y para tu bolsillo.',
            'url' => 'https://www.backmarket.es/es-es/p/iphone-13-128-gb-azul-libre/e4d4b68e-9dec-438d-be52-d348924bfe62?shopping=gmc&gad_source=1#l=12',
            'categoria' => 'Moviles',
            'puntuacion' => 4,
            'precio' => 739.00,
            'precio_descuento' => 430.40,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Kit Tijeras',
            'descripcion' => 'Juego de tijeras especiales para manicura, cortapelos diagonales, juego de alicates para pedicura, inflamacióno 2',
            'url' => 'https://www.miravia.es/',
            'categoria' => 'Herramientas',
            'puntuacion' => 5,
            'precio' => 6.88,
            'precio_descuento' => 1.99,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Aceite Oleum',
            'descripcion' => 'Coosur - Aceite de Oliva Virgen Extra, Selección Especial Cooperativa, garrafa 5L',
            'url' => 'https://www.miravia.es',
            'categoria' => 'Alimentacion',
            'puntuacion' => 3,
            'precio' => 57.75,
            'precio_descuento' => 48.99,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Coca-Cola',
            'descripcion' => '15/24/30 Latas De COCA COLA / COCACOLA ZERO SABOR ORIGINAL, AQUARIUS LIMON / AQUARIUS NARANJA, FANTA LIMON / FANTA NARANJA / FANTA LIMON ZERO, NESTEA LIMON, CAJA 24Unidades lata 33cl / 330ml, Envio Desde España',
            'url' => 'https://www.miravia.es/p/',
            'categoria' => 'Alimentacion',
            'puntuacion' => 5,
            'precio' => 19.99,
            'precio_descuento' => 11.99,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Bolas magicas',
            'descripcion' => 'Bolas Mágicas de lavandería para eliminación de manchas de ropa, Bola de lavandería reutilizable de silicona para prevención de nudos, herramientas de limpieza de atrapapelo',
            'url' => 'https://www.miravia.es/',
            'categoria' => 'Lavanderia',
            'puntuacion' => 5,
            'precio' => 0.69,
            'precio_descuento' => 0.41,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'titulo' => 'Cargador',
            'descripcion' => 'Cargador carga rápida USB de 4 puertos, enchufe adaptador de pared de 36W, PD, 20W, tres USB tipo A y uno tipo C -KARAWAN',
            'url' => 'https://www.mediamarkt.es/es/product/_cargador-samsung-ep-t4510xbegeu-cable-usb-c-15-m-45w-carga-rapida-negro-1525302.html',
            'categoria' => 'Cargador',
            'puntuacion' => 5,
            'precio' => 14.00,
            'precio_descuento' => 5.50,
            'disponible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],

    ]);
}
}
