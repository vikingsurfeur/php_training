<?php

namespace Tutorial;
class Conversion
{
    /**
     * Defined the const EURO symbol
     */
    private const EURO = ' €';

    /**
     * @param int $number Price
     * @return string Add Zero forward the price and put a € symbol at the end of string
     */
    public static function getZero(int $number): string
    {
        return $number < 10 ? '0'.$number.self::EURO : $number.self::EURO; // Call the EURO const with self::
    }
}