<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Contact::class, function (Faker $faker) {
    return [
        'type_contact_id' => $faker->numberBetween(1, 2),
        'type_identification' => 'CC',
        'indentification' => $faker->numberBetween(10000000, 9000000000),
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName,
        'address' => $faker->address,
        'state' => 'Córdoba',
        'city' => 'Buenavista',
        'cellphone' => $faker->phoneNumber,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'observations' => $faker->sentence()
    ];
});
