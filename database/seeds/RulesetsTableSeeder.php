<?php

use Illuminate\Database\Seeder;

class RulesetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rulesets')->insert([
            'name' => 'ASA',
            'info' => '',
            'url' => 'http://',
            'img' => 'asa.jpg',
        ]);

        DB::table('rulesets')->insert([
            'name' => 'IBO',
            'info' => '',
            'url' => 'http://',
            'img' => 'asa.jpg',
        ]);

        DB::table('rulesets')->insert([
            'name' => 'Casual',
            'info' => '',
            'url' => 'http://',
            'img' => 'asa.jpg',
        ]);
    }
}
