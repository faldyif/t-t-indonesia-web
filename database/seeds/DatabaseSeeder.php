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
        $this->call(AdminSeeder::class);
        $this->call(JenjangPendidikanSeeder::class);
        $this->call(StatusSeeder::class);
        factory(App\UserIkhwan::class, 10)->create()->each(function ($u) {
            $user = App\User::latest()->get()->last();
            $user->linked_id = $u->id;
            $user->save();
        });;
        factory(App\UserAkhwat::class, 10)->create()->each(function ($u) {
            $user = App\User::latest()->get()->last();
            $user->linked_id = $u->id;
            $user->save();
        });;
    }
}
