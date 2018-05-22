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
        DB::table('hobi')->insert(['hobi' => "Menulis"]);
        DB::table('hobi')->insert(['hobi' => "Traveling"]);
        DB::table('hobi')->insert(['hobi' => "Memasak"]);
        DB::table('hobi')->insert(['hobi' => "Fotografi"]);
        DB::table('hobi')->insert(['hobi' => "Bersepeda"]);
        DB::table('hobi')->insert(['hobi' => "Melukis"]);
        DB::table('hobi')->insert(['hobi' => "Membaca"]);
        DB::table('hobi')->insert(['hobi' => "Menggambar"]);
        DB::table('hobi')->insert(['hobi' => "Belajar"]);
        DB::table('hobi')->insert(['hobi' => "Fashion"]);
        DB::table('hobi')->insert(['hobi' => "Desain"]);
        DB::table('hobi')->insert(['hobi' => "Cocok tanam"]);
        DB::table('hobi')->insert(['hobi' => "Belanja"]);
    }
}
