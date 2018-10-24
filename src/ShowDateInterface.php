<?php

namespace Zraiev\DateTimeHelper;

interface ShowDateInterface
{
    /**
     * @param $result string
     * @param $language string
     *
     * @return string
     */
    public function showDate($result, $language);
}
