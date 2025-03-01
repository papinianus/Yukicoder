<?php
declare(strict_types=1);
[$a, $b, $c] = UtilIO::getIntArray();
$minutes_in_sec = 60;
$hour_in_sec = 60 * $minutes_in_sec;
$diff = $a * $minutes_in_sec - $b;
if ($diff <= 0) {
    UtilIO::echo("-1");
    exit;
}
$ans = ceil($c * $hour_in_sec / $diff);
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
    public static function echo(string|int|float $val):void {
        echo static::toLine("$val");
    }
    public static function toLine(string $str):string {
        return trim($str).static::$n;
    }
}