<?php

use Illuminate\Database\Seeder;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert(['hobi' => "Wisata Kuliner"]);
        DB::table('hobi')->insert(['hobi' => "Olahraga"]);
    }
}
