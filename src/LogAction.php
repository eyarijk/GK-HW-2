<?php

namespace Evrey\Images;


abstract class LogAction
{
    private static $actions = [];

    /**
     * @param string $text
     */
    public static function addAction(string $text): void
    {
        self::$actions[] = $text;
    }

    /**
     * @param string $glue
     * @return string
     */
    public static function getLog(string $glue): string
    {
        return implode($glue,self::$actions).$glue;
    }
}