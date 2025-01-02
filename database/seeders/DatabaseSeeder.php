<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Manga',
                'created_at' => now(),

            ],
            [
                'name' => 'Novel',
                'created_at' => now(),
            ]
        ]);
    }
}
