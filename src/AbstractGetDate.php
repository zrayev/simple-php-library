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


    public function formatDate($result)
    {
        return $result;
    }

    public function showDate($result)
    {

    }
}