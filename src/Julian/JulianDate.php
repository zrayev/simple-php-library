<?php

namespace Zraiev\DateTimeHelper\Julian;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;


class JulianDate extends AbstractGetDate
{
    public function renderDate($date)
    {
        $jd = cal_to_jd(CAL_GREGORIAN, $date['month'], $date['day'], $date['year']);

        return $jd;
    }

    use DateTimeHelper\ShowDateTrait;
}