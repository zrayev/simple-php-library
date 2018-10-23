<?php

require_once  __DIR__ .'/vendor/fzaninotto/faker/src/autoload.php';

use Faker\Factory;

$faker = Factory::create();

echo $faker->date('d-m-Y');
