<?php

use Illuminate\Database\Seeder;

class KebiasaanBurukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keb_baik')->insert(['kebiasaan' => "Turuan"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Ngaretan"]);
    }
}
