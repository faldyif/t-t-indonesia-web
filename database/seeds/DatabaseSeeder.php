<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(JenjangPendidikanSeeder::class);
        $this->call(KebiasaanBaikSeeder::class);
        $this->call(KebiasaanBurukSeeder::class);
        $this->call(HobiSeeder::class);
        $this->call(SukuSeeder::class);


        // Setelah normalisasi, seeder dibawah ini perlu diperbaharui lagi
        factory(App\UserIkhwan::class, 50)->create()->each(function ($u) {
            $user = App\User::latest()->get()->last();
            $user->linked_id = $u->id;
            $user->save();
        });;
        factory(App\UserAkhwat::class, 50)->create()->each(function ($u) {
            $user = App\User::latest()->get()->last();
            $user->linked_id = $u->id;
            $user->save();
        });;


    }
}
