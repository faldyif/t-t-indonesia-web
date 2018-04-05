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
    }
}
