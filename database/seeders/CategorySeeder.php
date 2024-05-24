<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create(['id' => 1, 'name' => 'Electrónica']);
        Category::factory()->create(['id' => 2, 'name' => 'Electrodomésticos']);
        Category::factory()->create(['id' => 3, 'name' => 'Fitness y Deportes']);
        Category::factory()->create(['id' => 4, 'name' => 'Exterior y Camping']);
        Category::factory()->create(['id' => 5, 'name' => 'Salud y Bienestar']);
        Category::factory()->create(['id' => 6, 'name' => 'Hogar Inteligente']);
        Category::factory()->create(['id' => 7, 'name' => 'Suministros de Oficina']);
        Category::factory()->create(['id' => 8, 'name' => 'Accesorios de Viaje']);
        Category::factory()->create(['id' => 9, 'name' => 'Gadgets de Cocina']);
        Category::factory()->create(['id' => 10, 'name' => 'Cuidado Personal']);
        Category::factory()->create(['id' => 12, 'name' => 'Seguridad y Protección']);
        Category::factory()->create(['id' => 13, 'name' => 'Iluminación']);
        Category::factory()->create(['id' => 14, 'name' => 'Herramientas y Bricolaje']);
        Category::factory()->create(['id' => 15, 'name' => 'Suministros para Mascotas']);
        Category::factory()->create(['id' => 16, 'name' => 'Accesorios de Moda']);
        Category::factory()->create(['id' => 17, 'name' => 'Entretenimiento']);
        Category::factory()->create(['id' => 18, 'name' => 'Productos para Bebés']);
        Category::factory()->create(['id' => 19, 'name' => 'Automotriz']);
        Category::factory()->create(['id' => 20, 'name' => 'Limpieza y Organización']);
        Category::factory()->create(['id' => 21, 'name' => 'Gadgets Tecnológicos']);
    }
}
