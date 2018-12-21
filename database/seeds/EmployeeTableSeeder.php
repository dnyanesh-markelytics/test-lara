<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('employees')->insert([
            'first_name' => 'Smart Solutions',
            'last_name' => 'Smart Solutions',
            'email' => 'sushilsk@smart.com',
            'phone' => '9021303900',
            'company_id'=>'1',
        ]);
    }
}
