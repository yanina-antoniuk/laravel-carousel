<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'id' => 1,
                'title' => 'A Traditional Taste of Tuscany',
                'price' => 99,
                'rating' => 4.5,
                'chef_id' => 2,
                'number_of_reviews' => 34,
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'title' => 'Italian Farm to Table',
                'price' => 65,
                'rating' => 4.1,
                'chef_id' => 1,
                'number_of_reviews' => 28,
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
