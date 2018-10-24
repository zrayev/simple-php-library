<?php

namespace Zraiev\DateTimeHelper\Chinese;

use DateTime;
use Zraiev\DateTimeHelper;
use Zraiev\DateTimeHelper\AbstractGetDate;
use peterkahl\Lunar\Lunar;

class ChineseDate extends AbstractGetDate
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
        $gregorianDate = new DateTime();
        $gregorianDate->setDate($this->year, $this->month, $this->day);
        $gregorianDateFormated = $gregorianDate->format('Y-m-d');

        $chineseDate = Lunar::Gregorian2Lunar($gregorianDateFormated);

        return $this->formatDate($chineseDate['d'], $chineseDate['m'], $chineseDate['y']);
    }

    use DateTimeHelper\ShowDateTrait;
}
