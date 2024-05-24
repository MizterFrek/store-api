<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tag::factory()->create(['id' => 1, 'name' => 'Ecológico']);
        \App\Models\Tag::factory()->create(['id' => 2, 'name' => 'Energía Solar']);
        \App\Models\Tag::factory()->create(['id' => 3, 'name' => 'Hogar Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 4, 'name' => 'Portátil']);
        \App\Models\Tag::factory()->create(['id' => 5, 'name' => 'Inalámbrico']);
        \App\Models\Tag::factory()->create(['id' => 6, 'name' => 'Bluetooth']);
        \App\Models\Tag::factory()->create(['id' => 7, 'name' => 'Digital']);
        \App\Models\Tag::factory()->create(['id' => 8, 'name' => 'LED']);
        \App\Models\Tag::factory()->create(['id' => 9, 'name' => 'Ergonómico']);
        \App\Models\Tag::factory()->create(['id' => 10, 'name' => 'Impermeable']);
        \App\Models\Tag::factory()->create(['id' => 11, 'name' => 'Reutilizable']);
        \App\Models\Tag::factory()->create(['id' => 12, 'name' => 'Plegable']);
        \App\Models\Tag::factory()->create(['id' => 13, 'name' => 'Recargable']);
        \App\Models\Tag::factory()->create(['id' => 14, 'name' => 'Instantáneo']);
        \App\Models\Tag::factory()->create(['id' => 15, 'name' => 'Cancelación de Ruido']);
        \App\Models\Tag::factory()->create(['id' => 16, 'name' => 'Fitness']);
        \App\Models\Tag::factory()->create(['id' => 17, 'name' => 'Viaje']);
        \App\Models\Tag::factory()->create(['id' => 18, 'name' => 'Ligero']);
        \App\Models\Tag::factory()->create(['id' => 19, 'name' => 'Ajustable']);
        \App\Models\Tag::factory()->create(['id' => 20, 'name' => 'UV']);
        \App\Models\Tag::factory()->create(['id' => 21, 'name' => 'Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 22, 'name' => 'Eléctrico']);
        \App\Models\Tag::factory()->create(['id' => 23, 'name' => 'Sin Cable']);
        \App\Models\Tag::factory()->create(['id' => 24, 'name' => 'Infrarrojo']);
        \App\Models\Tag::factory()->create(['id' => 25, 'name' => 'Compacto']);
        \App\Models\Tag::factory()->create(['id' => 26, 'name' => 'De Mano']);
        \App\Models\Tag::factory()->create(['id' => 27, 'name' => 'Sensor de Movimiento']);
        \App\Models\Tag::factory()->create(['id' => 28, 'name' => 'Aromaterapia']);
        \App\Models\Tag::factory()->create(['id' => 29, 'name' => 'WiFi']);
        \App\Models\Tag::factory()->create(['id' => 30, 'name' => 'Multiusos']);
        \App\Models\Tag::factory()->create(['id' => 31, 'name' => 'Solar']);
        \App\Models\Tag::factory()->create(['id' => 32, 'name' => 'Reloj Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 33, 'name' => 'Realidad Virtual']);
        \App\Models\Tag::factory()->create(['id' => 34, 'name' => '3D']);
        \App\Models\Tag::factory()->create(['id' => 35, 'name' => 'Seguridad en el Hogar']);
        \App\Models\Tag::factory()->create(['id' => 36, 'name' => 'Salud']);
        \App\Models\Tag::factory()->create(['id' => 37, 'name' => 'Exteriores']);
        \App\Models\Tag::factory()->create(['id' => 38, 'name' => 'Cocina']);
        \App\Models\Tag::factory()->create(['id' => 39, 'name' => 'Oficina']);
        \App\Models\Tag::factory()->create(['id' => 40, 'name' => 'Gaming']);
        \App\Models\Tag::factory()->create(['id' => 41, 'name' => 'Luz Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 42, 'name' => 'Enchufe Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 43, 'name' => 'Báscula Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 44, 'name' => 'Monitor de Bebé']);
        \App\Models\Tag::factory()->create(['id' => 45, 'name' => 'Cerradura Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 46, 'name' => 'Termostato Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 47, 'name' => 'Rastreador de Fitness']);
        \App\Models\Tag::factory()->create(['id' => 48, 'name' => 'Cepillo de Dientes Eléctrico']);
        \App\Models\Tag::factory()->create(['id' => 49, 'name' => 'Scooter Eléctrico']);
        \App\Models\Tag::factory()->create(['id' => 50, 'name' => 'Mascotas']);
        \App\Models\Tag::factory()->create(['id' => 51, 'name' => 'Gimnasio en Casa']);
        \App\Models\Tag::factory()->create(['id' => 52, 'name' => 'Gadget de Cocina']);
        \App\Models\Tag::factory()->create(['id' => 53, 'name' => 'Calefactor']);
        \App\Models\Tag::factory()->create(['id' => 54, 'name' => 'Terapia de Luz']);
        \App\Models\Tag::factory()->create(['id' => 55, 'name' => 'Máquina de Ruido']);
        \App\Models\Tag::factory()->create(['id' => 56, 'name' => 'Esterilizador UV']);
        \App\Models\Tag::factory()->create(['id' => 57, 'name' => 'Espejo Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 58, 'name' => 'Marco Digital']);
        \App\Models\Tag::factory()->create(['id' => 59, 'name' => 'Afeitadora Eléctrica']);
        \App\Models\Tag::factory()->create(['id' => 60, 'name' => 'Ponderada']);
        \App\Models\Tag::factory()->create(['id' => 61, 'name' => 'Antirrobo']);
        \App\Models\Tag::factory()->create(['id' => 62, 'name' => 'Timbre Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 63, 'name' => 'Licuadora Portátil']);
        \App\Models\Tag::factory()->create(['id' => 64, 'name' => 'Foto Instantánea']);
        \App\Models\Tag::factory()->create(['id' => 65, 'name' => 'Purificador de Aire']);
        \App\Models\Tag::factory()->create(['id' => 66, 'name' => 'Luz Solar']);
        \App\Models\Tag::factory()->create(['id' => 67, 'name' => 'Elaboración de Cerveza en Casa']);
        \App\Models\Tag::factory()->create(['id' => 68, 'name' => 'Maquillaje LED']);
        \App\Models\Tag::factory()->create(['id' => 69, 'name' => 'Luz UV']);
        \App\Models\Tag::factory()->create(['id' => 70, 'name' => 'Bicicleta Eléctrica']);
        \App\Models\Tag::factory()->create(['id' => 71, 'name' => 'Bicicleta']);
        \App\Models\Tag::factory()->create(['id' => 72, 'name' => 'Aspiradora Inalámbrica']);
        \App\Models\Tag::factory()->create(['id' => 73, 'name' => 'Frigorífico Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 74, 'name' => 'Estufa Portátil']);
        \App\Models\Tag::factory()->create(['id' => 75, 'name' => 'Chaleco Calefactor']);
        \App\Models\Tag::factory()->create(['id' => 76, 'name' => 'Tira de LED']);
        \App\Models\Tag::factory()->create(['id' => 77, 'name' => 'Energía Portátil']);
        \App\Models\Tag::factory()->create(['id' => 78, 'name' => 'Bandas de Fitness']);
        \App\Models\Tag::factory()->create(['id' => 79, 'name' => 'Cerradura de Puerta Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 80, 'name' => 'Camping']);
        \App\Models\Tag::factory()->create(['id' => 81, 'name' => 'Organizador de Escritorio']);
        \App\Models\Tag::factory()->create(['id' => 82, 'name' => 'Táctil']);
        \App\Models\Tag::factory()->create(['id' => 83, 'name' => 'Basurero Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 84, 'name' => 'Cartera de Viaje']);
        \App\Models\Tag::factory()->create(['id' => 85, 'name' => 'Espresso Portátil']);
        \App\Models\Tag::factory()->create(['id' => 86, 'name' => 'Báscula Digital']);
        \App\Models\Tag::factory()->create(['id' => 87, 'name' => 'Vino Eléctrico']);
        \App\Models\Tag::factory()->create(['id' => 88, 'name' => 'Interruptor de Luz Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 89, 'name' => 'Termómetro Digital']);
        \App\Models\Tag::factory()->create(['id' => 90, 'name' => 'Caja Fuerte Portátil']);
        \App\Models\Tag::factory()->create(['id' => 91, 'name' => 'Panel Solar']);
        \App\Models\Tag::factory()->create(['id' => 92, 'name' => 'Garaje Inteligente']);
        \App\Models\Tag::factory()->create(['id' => 93, 'name' => 'Esterilización UV']);
        \App\Models\Tag::factory()->create(['id' => 94, 'name' => 'Parrilla Portátil']);
        \App\Models\Tag::factory()->create(['id' => 95, 'name' => 'Clima Digital']);
        \App\Models\Tag::factory()->create(['id' => 96, 'name' => 'Aire Portátil']);
        \App\Models\Tag::factory()->create(['id' => 97, 'name' => 'Linterna Solar']);
        \App\Models\Tag::factory()->create(['id' => 98, 'name' => 'Seguridad Inalámbrica']);
        \App\Models\Tag::factory()->create(['id' => 99, 'name' => 'Gafas Inteligentes']);
        \App\Models\Tag::factory()->create(['id' => 100, 'name' => 'Medidor Láser Digital']);
    }
}
