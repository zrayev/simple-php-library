<?php

namespace Zraiev\DateTimeHelper\French;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;

class FrenchDate extends AbstractGetDate
{
    public function __construct($date)
    {
        parent::__construct($date);

        $this->month = date('m', $this->date);
        $this->day = date('d', $this->date);
        $this->year = date('Y', $this->date);
    }

    /**
     * @param object $date
     *
     * @return string
     */
    public function renderDate($date)
    {
        $julian_day = cal_to_jd(CAL_GREGORIAN, $this->month, $this->day, $this->year);
        $year = (int) (($julian_day - 2375109) * 4 / 1461) - 1;
        $month = (int) (($julian_day - 2375475 - $year * 365 - (int) ($year / 4)) / 30) + 1;
        $day = $julian_day - 2375444 - $month * 30 - $year * 365 - (int) ($year / 4);

        return $this->formatDate($day, $month, $year);
    }

    use DateTimeHelper\ShowDateTrait;
}
