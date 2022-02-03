<?php

namespace Database\Seeders;

use App\Models\HallType;
use Illuminate\Database\Seeder;

class HallTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HallType::insert(['hall_type_name' => 'KOSARKA']);
        HallType::insert(['hall_type_name' => 'FUDBAL']);
        HallType::insert(['hall_type_name' => 'STONI TENIS']);
        HallType::insert(['hall_type_name' => 'TENIS']);
        HallType::insert(['hall_type_name' => 'PAINTBALL']);
    }
}
