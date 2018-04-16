<?php

use Illuminate\Database\Seeder;

class KebiasaanBaikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keb_baik')->insert(['kebiasaan' => "Beramal Soleh"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Suka bersih-bersih"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Belajar"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Membantu orang lain"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Berorganisasi"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Membaca buku"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Konsumsi makanan sehat"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Taat aturan"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Semangat memperbaiki diri"]);
        DB::table('keb_baik')->insert(['kebiasaan' => "Suka menebar kebaikan dengan ukhuwah"]);
    }
}
