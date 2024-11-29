<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            ['name' => 'Nasi Goreng', 'description' => 'Nasi goreng spesial', 'price' => 20000],
            ['name' => 'Mie Goreng', 'description' => 'Mie goreng pedas', 'price' => 15000],
        ]);
    }
}
