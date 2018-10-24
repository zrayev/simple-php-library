<?php

namespace Zraiev\DateTimeHelper\Arabic;

use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;

class ArabicDate extends AbstractGetDate
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
        $year  = (int) ((30 * ($julian_day - 1948440) + 10646) / 10631);
        $month = (int) ((11 * ($julian_day - $year * 354 - (int) ((3 + 11 * $year) / 30) - 1948086) + 330) / 325);
        $day   = $julian_day - 29 * ($month - 1) - (int) ((6 * $month - 1) / 11) - $year * 354 - (int) ((3 + 11 * $year) / 30) - 1948085;

        return $this->formatDate($day, $month, $year);
    }

    use DateTimeHelper\ShowDateTrait;
}
