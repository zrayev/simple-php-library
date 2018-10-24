<?php

namespace Zraiev\DateTimeHelper;

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
     * @param $result string
     */
    public function showDate($result)
    {
    }
}
