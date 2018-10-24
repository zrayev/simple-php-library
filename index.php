<?php

require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;
use Zraiev\DateTimeHelper\Arabic\ArabicDate;
use Zraiev\DateTimeHelper\Chinese\ChineseDate;
use Zraiev\DateTimeHelper\French\FrenchDate;
use Zraiev\DateTimeHelper\Julian\JulianDate;

$faker = Factory::create();
$dateFake = $faker->unixTime($max = 'now');

echo 'Test date:' . date('d-m-Y', $dateFake) . '<br>';

$julian = new JulianDate($dateFake);
$julian1 = $julian->renderDate($julian);
$julian->showDate($julian1, 'Julian');

$arabic = new ArabicDate($dateFake);
$arabic1 = $arabic->renderDate($arabic);
$arabic->showDate($arabic1, 'Arabic');

$french = new FrenchDate($dateFake);
$french1 = $french->renderDate($french);
$french->showDate($french1, 'French');

$chinese = new ChineseDate($dateFake);
$chinese1 = $chinese->renderDate($chinese);
$chinese->showDate($chinese1, 'Chinese');
