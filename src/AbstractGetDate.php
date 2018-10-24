<?php

namespace Zraiev\DateTimeHelper;

abstract class AbstractGetDate implements ShowDateInterface, FormatDateInterface
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
     *
     * @return array
     */
    public function formatDate($result)
    {
        $result = $this->date;

        $month = date('m', $result);
        $day = date('d', $result);
        $year = date('Y', $result);

        $result = [
            'month' => $month,
            'day' => $day,
            'year' => $year,
        ];

        return $result;
    }

    /**
     * @param $result string
     */
    public function renderDate($result) {}

    /**
     * @param $result string
     */
    public function showDate($result) {}

}
