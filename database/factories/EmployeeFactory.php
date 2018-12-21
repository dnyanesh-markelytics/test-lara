<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Employee::class, function (Faker $faker) {
    return [
    	'first_name' => $faker->first_name,
    	'last_name' => $faker->last_name,
    	'company_id' => $faker->company_id,
    	'email' => $faker->email,
    	'phone' => $faker->phone
    ];
});
