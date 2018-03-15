<?php

use Illuminate\Database\Seeder;

class JenjangPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "SD"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "SMP"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "SMA"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "D1"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "D2"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "D3"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "S1"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "S2"]);
        DB::table('jenjang_pendidikans')->insert(['nama_jenjang' => "S3"]);
    }
}
