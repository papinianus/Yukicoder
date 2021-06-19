<?php
declare(strict_types=1);

class UtilIO {
    protected static string $n = PHP_EOL;
    protected function __construct() { }
    public static function getString():string {
        return trim(fgets(STDIN));
    }
    public static function getInt():int {
        return intval(trim(fgets(STDIN)));
    }
    public static function echo(string $str):void {
        echo static::toLine($str);
    }
    public static function toLine(string $str):string {
        return trim($str).static::$n;
    }
}