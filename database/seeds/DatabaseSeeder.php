<?php

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
        $this->call(SectorsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TownsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
