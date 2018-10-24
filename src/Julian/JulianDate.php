<?php

namespace Zraiev\DateTimeHelper\Julian;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;


class JulianDate extends AbstractGetDate
{
    public function renderDate()
    {
        $result = $this->date;

        $month = date('m', $result);
        $day = date('d', $result);
        $year = date('Y', $result);

        $jd = cal_to_jd(CAL_GREGORIAN, $month, $day, $year);

        return $jd;
    }

    use DateTimeHelper\ShowDateTrait;
}