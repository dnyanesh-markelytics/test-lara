<?php

use Illuminate\Database\Seeder;
// use database\seeds\UserTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
    }
}
