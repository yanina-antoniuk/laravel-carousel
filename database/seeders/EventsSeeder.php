<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'id' => 1,
                'class_id' => 2,
                'starts_at' => Carbon::tomorrow()->addHours(5),
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
