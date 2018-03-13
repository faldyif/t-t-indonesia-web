<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Ustadz Abu Zayyan Mansur",
            'email' => 'admin@tnt.id',
            'password' => bcrypt('secret'),
            'phone_number' => 01234,
            'user_type' => 1,
        ]);
    }
}
