<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Smart Solutions',
            'email' => 'sushilsk@smart.com',
            'logo'=>'public/images/pics.jpg',
            'website'=> 'wwww.smart.com'
        ]);
    }
}
