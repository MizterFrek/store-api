<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->create(['id' => 1, 'name' => 'Apple']);
        Brand::factory()->create(['id' => 2, 'name' => 'Samsung']);
        Brand::factory()->create(['id' => 3, 'name' => 'Sony']);
        Brand::factory()->create(['id' => 4, 'name' => 'Philips']);
        Brand::factory()->create(['id' => 5, 'name' => 'LG']);
        Brand::factory()->create(['id' => 6, 'name' => 'Panasonic']);
        Brand::factory()->create(['id' => 7, 'name' => 'Bose']);
        Brand::factory()->create(['id' => 8, 'name' => 'Google']);
        Brand::factory()->create(['id' => 9, 'name' => 'Amazon']);
        Brand::factory()->create(['id' => 10, 'name' => 'Xiaomi']);
        Brand::factory()->create(['id' => 11, 'name' => 'Dyson']);
        Brand::factory()->create(['id' => 12, 'name' => 'Anker']);
        Brand::factory()->create(['id' => 13, 'name' => 'Belkin']);
        Brand::factory()->create(['id' => 14, 'name' => 'Braun']);
        Brand::factory()->create(['id' => 15, 'name' => 'Oral-B']);
        Brand::factory()->create(['id' => 16, 'name' => 'Fitbit']);
        Brand::factory()->create(['id' => 17, 'name' => 'Garmin']);
        Brand::factory()->create(['id' => 18, 'name' => 'Withings']);
        Brand::factory()->create(['id' => 19, 'name' => 'Nespresso']);
        Brand::factory()->create(['id' => 20, 'name' => 'Keurig']);
        Brand::factory()->create(['id' => 21, 'name' => 'Instant Pot']);
        Brand::factory()->create(['id' => 22, 'name' => 'Cuisinart']);
        Brand::factory()->create(['id' => 23, 'name' => 'KitchenAid']);
        Brand::factory()->create(['id' => 24, 'name' => 'Breville']);
        Brand::factory()->create(['id' => 25, 'name' => 'Ninja']);
        Brand::factory()->create(['id' => 26, 'name' => 'T-fal']);
        Brand::factory()->create(['id' => 27, 'name' => 'Smeg']);
        Brand::factory()->create(['id' => 28, 'name' => 'Vitamix']);
        Brand::factory()->create(['id' => 29, 'name' => 'Hamilton Beach']);
        Brand::factory()->create(['id' => 30, 'name' => 'Oster']);
        Brand::factory()->create(['id' => 31, 'name' => 'Miele']);
        Brand::factory()->create(['id' => 32, 'name' => 'Shark']);
        Brand::factory()->create(['id' => 33, 'name' => 'Roomba']);
        Brand::factory()->create(['id' => 34, 'name' => 'Eufy']);
        Brand::factory()->create(['id' => 35, 'name' => 'Nest']);
        Brand::factory()->create(['id' => 36, 'name' => 'Ring']);
        Brand::factory()->create(['id' => 37, 'name' => 'SimpliSafe']);
        Brand::factory()->create(['id' => 38, 'name' => 'August']);
        Brand::factory()->create(['id' => 39, 'name' => 'Kwikset']);
        Brand::factory()->create(['id' => 40, 'name' => 'Yale']);
        Brand::factory()->create(['id' => 41, 'name' => 'Gucci']);
        Brand::factory()->create(['id' => 42, 'name' => 'Netgear']);
        Brand::factory()->create(['id' => 43, 'name' => 'Arlo']);
        Brand::factory()->create(['id' => 44, 'name' => 'Blink']);
        Brand::factory()->create(['id' => 45, 'name' => 'Logitech']);
        Brand::factory()->create(['id' => 46, 'name' => 'Microsoft']);
        Brand::factory()->create(['id' => 47, 'name' => 'HP']);
        Brand::factory()->create(['id' => 48, 'name' => 'Dell']);
        Brand::factory()->create(['id' => 49, 'name' => 'Asus']);
        Brand::factory()->create(['id' => 50, 'name' => 'Acer']);
        Brand::factory()->create(['id' => 51, 'name' => 'Lenovo']);
        Brand::factory()->create(['id' => 52, 'name' => 'Razer']);
        Brand::factory()->create(['id' => 53, 'name' => 'Corsair']);
        Brand::factory()->create(['id' => 54, 'name' => 'JBL']);
        Brand::factory()->create(['id' => 55, 'name' => 'Harman Kardon']);
        Brand::factory()->create(['id' => 56, 'name' => 'Marshall']);
        Brand::factory()->create(['id' => 57, 'name' => 'Beats']);
        Brand::factory()->create(['id' => 58, 'name' => 'Jabra']);
        Brand::factory()->create(['id' => 59, 'name' => 'Sennheiser']);
        Brand::factory()->create(['id' => 60, 'name' => 'B&O Play']);
        Brand::factory()->create(['id' => 61, 'name' => 'Beyerdynamic']);
        Brand::factory()->create(['id' => 62, 'name' => 'Skullcandy']);
        Brand::factory()->create(['id' => 63, 'name' => 'HyperX']);
        Brand::factory()->create(['id' => 64, 'name' => 'Roku']);
        Brand::factory()->create(['id' => 65, 'name' => 'Nvidia']);
        Brand::factory()->create(['id' => 66, 'name' => 'AMD']);
        Brand::factory()->create(['id' => 67, 'name' => 'Intel']);
        Brand::factory()->create(['id' => 68, 'name' => 'SanDisk']);
        Brand::factory()->create(['id' => 69, 'name' => 'Seagate']);
        Brand::factory()->create(['id' => 70, 'name' => 'Western Digital']);
        Brand::factory()->create(['id' => 71, 'name' => 'Lacie']);
        Brand::factory()->create(['id' => 72, 'name' => 'Toshiba']);
        Brand::factory()->create(['id' => 73, 'name' => 'Canon']);
        Brand::factory()->create(['id' => 74, 'name' => 'Nikon']);
        Brand::factory()->create(['id' => 75, 'name' => 'Fujifilm']);
        Brand::factory()->create(['id' => 76, 'name' => 'GoPro']);
        Brand::factory()->create(['id' => 77, 'name' => 'DJI']);
        Brand::factory()->create(['id' => 78, 'name' => 'Polaroid']);
        Brand::factory()->create(['id' => 79, 'name' => 'Kodak']);
        Brand::factory()->create(['id' => 80, 'name' => 'TP-Link']);
        Brand::factory()->create(['id' => 81, 'name' => 'Eero']);
        Brand::factory()->create(['id' => 82, 'name' => 'Ubiquiti']);
        Brand::factory()->create(['id' => 83, 'name' => 'Synology']);
        Brand::factory()->create(['id' => 84, 'name' => 'QNAP']);
        Brand::factory()->create(['id' => 85, 'name' => 'Asustor']);
        Brand::factory()->create(['id' => 86, 'name' => 'Casio']);
        Brand::factory()->create(['id' => 87, 'name' => 'D-Link']);
        Brand::factory()->create(['id' => 88, 'name' => 'Linksys']);
        Brand::factory()->create(['id' => 89, 'name' => 'Epson']);
        Brand::factory()->create(['id' => 90, 'name' => 'Brother']);
        Brand::factory()->create(['id' => 91, 'name' => 'Microchip']);
        Brand::factory()->create(['id' => 92, 'name' => 'Rolex']);
        Brand::factory()->create(['id' => 93, 'name' => 'Sharp']);
        Brand::factory()->create(['id' => 94, 'name' => 'Vizio']);
        Brand::factory()->create(['id' => 95, 'name' => 'Hisense']);
        Brand::factory()->create(['id' => 96, 'name' => 'TCL']);
        Brand::factory()->create(['id' => 97, 'name' => 'Beko']);
        Brand::factory()->create(['id' => 98, 'name' => 'Haier']);
        Brand::factory()->create(['id' => 99, 'name' => 'Bosch']);
        Brand::factory()->create(['id' => 100, 'name' => 'Siemens']);
    }
}
