<?php

namespace Zraiev\DateTimeHelper;

trait ShowDateTrait
{
    /**
     * @param $result string
     * @param $language string
     */
    public function showDate($result, $language)
    {
        echo 'Date '. $language . ' : ' . $result . '<br>';
    }
}
