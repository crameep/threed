<?php

use App\Models\Club;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'club_id' => Club::inRandomOrder()->first()->id,
            'date' => Carbon::now(),
            'starts_at' => '08:00',
            'ends_at' => '14:00',
            'targets' => '30',
            'info' => str_random(10),
            'adult_price' => rand(10, 100),
            'child_price' => rand(10, 100),
            'member_price' => rand(10, 100),
            'confirmed' => false,
        ]);

        DB::table('events')->insert([
            'club_id' => Club::inRandomOrder()->first()->id,
            'date' => Carbon::now(),
            'starts_at' => '08:00',
            'ends_at' => '14:00',
            'targets' => '30',
            'info' => str_random(10),
            'adult_price' => rand(10, 100),
            'child_price' => rand(10, 100),
            'member_price' => rand(10, 100),
            'confirmed' => false,
        ]);

        DB::table('events')->insert([
            'club_id' => Club::inRandomOrder()->first()->id,
            'date' => Carbon::now(),
            'starts_at' => '08:00',
            'ends_at' => '14:00',
            'targets' => '30',
            'info' => str_random(10),
            'adult_price' => rand(10, 100),
            'child_price' => rand(10, 100),
            'member_price' => rand(10, 100),
            'confirmed' => false,
        ]);
        DB::table('events')->insert([
            'club_id' => Club::inRandomOrder()->first()->id,
            'date' => Carbon::now(),
            'starts_at' => '08:00',
            'ends_at' => '14:00',
            'targets' => '30',
            'info' => str_random(10),
            'adult_price' => rand(10, 100),
            'child_price' => rand(10, 100),
            'member_price' => rand(10, 100),
            'confirmed' => false,
        ]);
    }
}
