<?php
declare(strict_types=1);
$s = UtilIO::getString();
eval("\$val = {$s};");
UtilIO::echo(strval($val));

class UtilIO {
    protected static string $n = PHP_EOL;
    protected function __construct() { }
    public static function getString():string {
        return trim(fgets(STDIN));
    }
    public static function getInt():int {
        return intval(static::getString());
    }
    public static function getStringArray($separator = " "):array {
        return explode($separator, static::getString());
    }
    public static function getIntArray($separator = " "):array {
        return array_map('intval', static::getStringArray($separator));
    }
    public static function echo(string $str):void {
        echo static::toLine($str);
    }
    public static function toLine(string $str):string {
        return trim($str).static::$n;
    }
}