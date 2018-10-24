<?php

require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;
use Zraiev\DateTimeHelper\Julian\JulianDate;

$faker = Factory::create();

//$dateFake = $faker->date('d-m-Y');
$dateNow = time();

$julian = new JulianDate($dateNow);
$julian2 = $julian->renderDate();
$julian3 = $julian->formatDate($julian2);
$julian->showDate($julian3);

echo ("<br>".date('d-m-Y',$dateNow));
