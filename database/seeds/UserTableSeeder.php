<?php

use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dnyanesh',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
