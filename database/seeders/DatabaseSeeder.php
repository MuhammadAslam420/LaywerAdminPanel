<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        // \App\Models\City::factory(10)->create();
       // \App\Models\Court::factory(20)->create();
      // \App\Models\Petition::factory(20)->create();
      \App\Models\Hiring::factory(40)->create();

    }
}
