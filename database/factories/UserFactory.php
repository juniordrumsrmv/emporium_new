<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Emporium\Agent::class, function (Faker $faker) {
    $aCreate = [
        [
            'agent_key' => 10,
            'alternate_id' => 'adm',
            'password' => bcrypt('adm'),
            'language' => 'br',
            'usr_mode' => 'amount'
        ],
        [
            'agent_key' => 11,
            'alternate_id' => 'api',
            'password' => bcrypt('api'),
            'language' => 'br',
            'usr_mode' => 'amount'
        ],
        [
            'agent_key' => 12,
            'alternate_id' => '1190',
            'password' => bcrypt('1190'),
            'language' => 'br',
            'usr_mode' => 'plu'
        ]
    ];
    return $aCreate;
});

$factory->define(Emporium\User::class, function (Faker $faker) {
    $aCreate = [
        [
            'agent_key' => 10,
            'alternate_id' => 'adm',
            'password' => bcrypt('adm'),
            'language' => 'br',
            'usr_mode' => 'amount'
        ],
        [
            'agent_key' => 11,
            'alternate_id' => 'api',
            'password' => bcrypt('api'),
            'language' => 'br',
            'usr_mode' => 'amount'
        ],
        [
            'agent_key' => 12,
            'alternate_id' => '1190',
            'password' => bcrypt('1190'),
            'language' => 'br',
            'usr_mode' => 'plu'
        ]
    ];
    return $aCreate;
});
