<?php


namespace Halnique\String;


class Camelize
{
    private const DELIMITER_WORDS = [' ', '-', '_'];

    public static function lower(string $string): string
    {
        return lcfirst(self::upper($string));
    }

    public static function upper(string $string): string
    {
        return str_replace(self::DELIMITER_WORDS, '', ucwords($string, implode('', self::DELIMITER_WORDS)));
    }
}