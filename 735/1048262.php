<?php
declare(strict_types=1);
[$r, $d] = UtilIO::getFloatArray();
$ans = sqrt($d ** 2 - $r **2);
UtilIO::echo($ans);

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
    public static function getFloatArray($separator = " "):array {
        return array_map('floatval', static::getStringArray($separator));
    }
    public static function echo(string|int|float $val):void {
        echo static::toLine("$val");
    }
    public static function toLine(string $str):string {
        return trim($str).static::$n;
    }
}