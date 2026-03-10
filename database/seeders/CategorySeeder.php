<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'type' => 'fiksi'
        ]);
        DB::table('categories')->insert([
            'type' => 'non-fiksi'
        ]);
        DB::table('categories')->insert([
            'type' => 'religi'
        ]);
    }
}
