<?php

namespace Database\Seeders;

use App\Models\Hall;
use App\Models\HallType;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hall::insert([
            'max_capacity' => 10,
            'price' => 3500,
            'location' => 'Lorem, ipsum dolor.',
            'image_path' => 'basketball.jpeg',
            'hall_type_id' => HallType::where('hall_type_name', 'KOSARKA')->first()
        ]);

        Hall::insert([
            'max_capacity' => 10,
            'price' => 3000,
            'location' => 'Lorem, ipsum dolor.',
            'image_path' => 'football.jpeg',
            'hall_type_id' => HallType::where('hall_type_name', 'FUDBAL')->first()
        ]);

        Hall::insert([
            'max_capacity' => 4,
            'price' => 700,
            'location' => 'Lorem, ipsum dolor.',
            'image_path' => 'table-tennis.jpeg',
            'hall_type_id' => HallType::where('hall_type_name', 'STONI TENIS')->first()
        ]);

        Hall::insert([
            'max_capacity' => 4,
            'price' => 1000,
            'location' => 'Lorem, ipsum dolor.',
            'image_path' => 'tennis.jpeg',
            'hall_type_id' => HallType::where('hall_type_name', 'TENIS')->first()
        ]);

        Hall::insert([
            'max_capacity' => 10,
            'price' => 10000,
            'location' => 'Lorem, ipsum dolor.',
            'image_path' => 'tennis.jpeg',
            'hall_type_id' => HallType::where('hall_type_name', 'PAINTBALL')->first()
        ]);

    }
}
