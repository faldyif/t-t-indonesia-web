<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert(['nama_status' => "Belum Menikah"]);
        DB::table('status')->insert(['nama_status' => "Sudah Menikah"]);
        DB::table('status')->insert(['nama_status' => "Janda"]);
        DB::table('status')->insert(['nama_status' => "Duda"]);
    }
}
