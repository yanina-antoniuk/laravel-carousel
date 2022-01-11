<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                'id' => 1,
                'name' => 'Latisha',
                'location' => 'Atlanta (Boulder Park)',
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Cris',
                'location' => 'Atlanta (Old Forth Ward)',
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
