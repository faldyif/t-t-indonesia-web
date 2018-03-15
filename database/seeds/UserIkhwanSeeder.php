<?php

use Illuminate\Database\Seeder;

class UserIkhwanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserIkhwan::class, 10)->create();
    }
}
