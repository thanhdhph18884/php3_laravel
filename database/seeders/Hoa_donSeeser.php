<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hoa_donSeeser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hoa_don')->insert([
            'hoadon_id'=>1,
            'user_id'=>1,
            'room_id'=>1,
            'date_rent'=> 7,
            'money'=>'70000000',
        ]);
    }
}
