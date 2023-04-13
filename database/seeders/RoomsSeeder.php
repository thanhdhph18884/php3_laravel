<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'room_id' => 1,
            'images' =>'anh.jpg',
            'description'=>'phòng đẹp',
            'price'=>'600000',
            'cate_id'=>1,
        ]);
    }
}
