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
        DB::table('keb_buruk')->insert(['kebiasaan' => "Turuan"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Ngaretan"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Pulang larut malam"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Malas"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Merokok"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Berbohong"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Buang sampah sembarangan"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Pelupa"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Sungkan"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Terlalu memikirkan perasaan orang lain"]);
        DB::table('keb_buruk')->insert(['kebiasaan' => "Suka menunda pekerjaan"]);
    }
}
