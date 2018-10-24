<?php

require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;
use Zraiev\DateTimeHelper\Julian\JulianDate;

$faker = Factory::create();
$dateFake = $faker->unixTime($max = 'now');

$julian = new JulianDate($dateFake);
$julian2 = $julian->formatDate($julian);
$julian3 = $julian->renderDate($julian2);
$julian->showDate($julian3);

echo "<br>"."Test date: ". date('d-m-Y', $dateFake);
