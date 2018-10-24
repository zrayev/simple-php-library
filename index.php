<?php

require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;
use Zraiev\DateTimeHelper\Julian\JulianDate;

$faker = Factory::create();
$dateFake = $faker->unixTime($max = 'now');

$julian = new JulianDate($dateFake);
$julian2 = $julian->renderDate($julian);
$julian->showDate($julian2);

echo "<br>"."Test date: ". date('d-m-Y', $dateFake);
