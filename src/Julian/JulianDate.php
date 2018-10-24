<?php

namespace Zraiev\DateTimeHelper\Julian;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;

class JulianDate extends AbstractGetDate
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
        $julianDay = cal_to_jd(CAL_GREGORIAN, $this->month, $this->day, $this->year);

        $a = $julianDay + 32044;
        $b = (int) ((4 * $a + 3) / 146097);
        $c = $a - (int) ($b * 146097 / 4);
        $d = (int) ((4 * $c + 3) / 1461);
        $e = $c - (int) ((1461 * $d) / 4);
        $m = (int) ((5 * $e + 2) / 153);
        $day   = $e - (int) ((153 * $m + 2) / 5) + 1;
        $month = $m + 3 - 12 * (int) ($m / 10);
        $year  = $b * 100 + $d - 4800 + (int) ($m / 10);
        if ($year < 1) {
            $year--;
        }

        return $this->formatDate($day, $month, $year);
    }

    /**
     * @param $julianDay string
     *
     * @return string
     */
    public function jdToYmd($julianDay)
    {
    }

    use DateTimeHelper\ShowDateTrait;
}
