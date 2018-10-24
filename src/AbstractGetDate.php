<?php

namespace Zraiev\DateTimeHelper;

use DateTime;

abstract class AbstractGetDate implements ShowDateInterface
{
    /**
     * @var string
     */
    protected $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * @param $result string
     */
    public function renderDate($result)
    {
    }

    /**
     * @param $day int
     * @param $month int
     * @param $year int
     * @return string int
     */
    public function formatDate($day, $month, $year)
    {
        $date = new DateTime();
        $date->setDate($year, $month, $day);
        $dateFormated = $date->format('d-m-Y');

        return $dateFormated;
    }

    /**
     * @param $result string
     * @param $language string
     */
    public function showDate($result, $language)
    {
    }
}
