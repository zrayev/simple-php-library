<?php

namespace Zraiev\DateTimeHelper\Julian;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;

class JulianDate extends AbstractGetDate
{
    public function __construct($date)
    {
        parent::__construct($date);
        $this->month  = date('m', $this->date);
        $this->day = date('d', $this->date);
        $this->year = date('Y', $this->date);
    }

    public function renderDate($date)
    {
        $jd = cal_to_jd(CAL_GREGORIAN, $this->month, $this->day, $this->year);

        return $jd;
    }

    use DateTimeHelper\ShowDateTrait;
}
