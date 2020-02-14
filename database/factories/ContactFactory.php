<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'prenom' => $faker->firstName($gender = null),
        'nom' => $faker->lastName,
        'titre' => $faker->jobTitle,
        'email_1' => $faker->unique()->safeEmail,
        'email_1_type' => $faker->numberBetween($min = 1, $max = 2),
        'email_2' => $faker->unique()->safeEmail,
        'email_2_type' => $faker->numberBetween($min = 1, $max = 2),
        'phone_1' => $faker->phoneNumber,
        'phone_1_type' => $faker->numberBetween($min = 1, $max = 4),
        'phone_2' => $faker->phoneNumber,
        'phone_2_type' => $faker->numberBetween($min = 1, $max = 4),
        'companie_id' => $faker->numberBetween($min = 1, $max = 50),
        'notes' => $faker->text,
    ];
});
