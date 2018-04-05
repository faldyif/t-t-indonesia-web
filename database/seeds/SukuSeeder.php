<?php

use Illuminate\Database\Seeder;

class SukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suku')->insert(['suku' => "Jawa"]);
        DB::table('suku')->insert(['suku' => "Sunda"]);
    }
}
