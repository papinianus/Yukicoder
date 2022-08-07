<?php
declare(strict_types=1);

$direction = ["N"=>0,"E"=>1,"S"=>2,"W"=>3];
$a = $direction[UtilIO::getString()];
$b = $direction[UtilIO::getString()];

UtilIO::echo(strval(($b - $a + 4) % 4));

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