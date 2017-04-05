<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'name' => str_random(10),
            'address' => '{ "name":"John", "age":30, "car":null }',
            'phone' => '8888888888',
            'info' => 'Sweet place to shoot',
            'membership_cost' => '0',
        ]);

        DB::table('clubs')->insert([
            'name' => str_random(10),
            'address' => '{ "name":"John", "age":30, "car":null }',
            'phone' => '8888888888',
            'info' => 'Sweet place to shoot',
            'membership_cost' => '0',
        ]);
    }
}
