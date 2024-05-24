<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Auriculares inalámbricos', 'description' => 'Auriculares Bluetooth de alta calidad con cancelación de ruido.', 'category_id' => 1, 'brand_id' => 1]);
        Product::create(['name' => 'Tablet con pantalla retina', 'description' => 'Tablet de 10 pulgadas con resolución retina y almacenamiento de 128GB.', 'category_id' => 1, 'brand_id' => 3]);
        Product::create(['name' => 'Reloj inteligente', 'description' => 'Reloj inteligente con GPS y monitor de ritmo cardíaco.', 'category_id' => 1, 'brand_id' => 4]);
        Product::create(['name' => 'Smart TV 4K', 'description' => 'Televisor inteligente con resolución 4K y soporte para HDR.', 'category_id' => 1, 'brand_id' => 6]);
        Product::create(['name' => 'Consola de videojuegos', 'description' => 'Consola de última generación con soporte para juegos 8K.', 'category_id' => 1, 'brand_id' => 8]);
        Product::create(['name' => 'Cámara digital SLR', 'description' => 'Cámara con sensor full-frame y grabación de video 4K.', 'category_id' => 1, 'brand_id' => 9]);
        Product::create(['name' => 'Monitor de 27 pulgadas', 'description' => 'Monitor 4K UHD con tasa de refresco de 144Hz.', 'category_id' => 1, 'brand_id' => 10]);
        Product::create(['name' => 'Refrigerador inteligente', 'description' => 'Refrigerador con pantalla táctil y conectividad Wi-Fi.', 'category_id' => 2, 'brand_id' => 11]);
        Product::create(['name' => 'Lavadora de carga frontal', 'description' => 'Lavadora de alta eficiencia con múltiples ciclos de lavado.', 'category_id' => 2, 'brand_id' => 12]);
        Product::create(['name' => 'Horno de convección', 'description' => 'Horno con función de convección y autolimpieza.', 'category_id' => 2, 'brand_id' => 13]);
        Product::create(['name' => 'Aspiradora robótica', 'description' => 'Aspiradora robótica con navegación inteligente y autovaciado.', 'category_id' => 2, 'brand_id' => 14]);
        Product::create(['name' => 'Microondas digital', 'description' => 'Microondas con pantalla LED y funciones preprogramadas.', 'category_id' => 2, 'brand_id' => 15]);
        Product::create(['name' => 'Batidora de alta velocidad', 'description' => 'Batidora con motor de alta potencia y múltiples accesorios.', 'category_id' => 2, 'brand_id' => 16]);
        Product::create(['name' => 'Purificador de aire', 'description' => 'Purificador de aire con filtro HEPA y control remoto.', 'category_id' => 2, 'brand_id' => 17]);
        Product::create(['name' => 'Freidora de aire', 'description' => 'Freidora de aire con capacidad de 5.5 litros y panel digital.', 'category_id' => 2, 'brand_id' => 18]);
        Product::create(['name' => 'Cafetera espresso', 'description' => 'Cafetera con molinillo integrado y sistema de leche espumada.', 'category_id' => 2, 'brand_id' => 19]);
        Product::create(['name' => 'Tostadora de 4 rebanadas', 'description' => 'Tostadora con controles ajustables y bandeja para migas.', 'category_id' => 2, 'brand_id' => 20]);
        Product::create(['name' => 'Bicicleta estática', 'description' => 'Bicicleta de ejercicio con monitor de frecuencia cardíaca.', 'category_id' => 3, 'brand_id' => 21]);
        Product::create(['name' => 'Cinta de correr plegable', 'description' => 'Cinta de correr con inclinación ajustable y programas predefinidos.', 'category_id' => 3, 'brand_id' => 22]);
        Product::create(['name' => 'Pesas ajustables', 'description' => 'Juego de pesas ajustables con rango de 5 a 50 libras.', 'category_id' => 3, 'brand_id' => 23]);
        Product::create(['name' => 'Banco de pesas multifuncional', 'description' => 'Banco de pesas ajustable para diferentes ejercicios de fuerza.', 'category_id' => 3, 'brand_id' => 24]);
        Product::create(['name' => 'Reloj deportivo con GPS', 'description' => 'Reloj deportivo con seguimiento de actividad y GPS.', 'category_id' => 3, 'brand_id' => 25]);
        Product::create(['name' => 'Elíptica con pantalla táctil', 'description' => 'Máquina elíptica con conectividad Bluetooth y pantalla táctil.', 'category_id' => 3, 'brand_id' => 26]);
        Product::create(['name' => 'Mancuernas de neopreno', 'description' => 'Juego de mancuernas recubiertas de neopreno para entrenamiento de fuerza.', 'category_id' => 3, 'brand_id' => 27]);
        Product::create(['name' => 'Rodillo de espuma', 'description' => 'Rodillo de espuma para masaje y recuperación muscular.', 'category_id' => 3, 'brand_id' => 28]);
        Product::create(['name' => 'Set de bandas de resistencia', 'description' => 'Conjunto de bandas de resistencia para ejercicios de fuerza y estiramiento.', 'category_id' => 3, 'brand_id' => 29]);
        Product::create(['name' => 'Tapete de yoga antideslizante', 'description' => 'Tapete de yoga con superficie antideslizante y grosor cómodo.', 'category_id' => 3, 'brand_id' => 30]);
        Product::create(['name' => 'Tienda de campaña', 'description' => 'Tienda de campaña para 4 personas, resistente al agua y fácil de montar.', 'category_id' => 4, 'brand_id' => 31]);
        Product::create(['name' => 'Mochila de senderismo', 'description' => 'Mochila con capacidad de 40 litros y múltiples compartimentos.', 'category_id' => 4, 'brand_id' => 32]);
        Product::create(['name' => 'Linterna recargable', 'description' => 'Linterna LED recargable con múltiples modos de iluminación.', 'category_id' => 4, 'brand_id' => 33]);
        Product::create(['name' => 'Silla plegable de camping', 'description' => 'Silla plegable portátil con soporte para bebidas.', 'category_id' => 4, 'brand_id' => 34]);
        Product::create(['name' => 'Bolsa de dormir', 'description' => 'Saco de dormir para temperaturas extremas, cómodo y compacto.', 'category_id' => 4, 'brand_id' => 35]);
        Product::create(['name' => 'Estufa portátil', 'description' => 'Estufa de gas portátil para camping con encendido automático.', 'category_id' => 4, 'brand_id' => 36]);
        Product::create(['name' => 'Botella de agua térmica', 'description' => 'Botella de acero inoxidable con aislamiento térmico.', 'category_id' => 4, 'brand_id' => 37]);
    }
}
