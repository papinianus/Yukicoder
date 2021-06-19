<?php
declare(strict_types=1);
$days = [23,24,25];
[$a, $b] = UtilIO::getIntArray();
$between = maker($a,$b);
UtilIO::echo(array_reduce($days,fn(int $carry, int $item):int => (($between($item)) ? $carry : ($carry + 1)),0));

function maker(int $a, int $b):callable {
    return fn(int $i) => $a <= $i && $i <= $b;
}

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
    public static function echo(mixed $value):void {
        if(is_string($value)) {
            echo static::toLine($value);
            return;
        }
        if(is_numeric($value)) {
            echo static::toLine(strval($value));
            return;
        }
        if(is_array($value)) {
            foreach($value as $v) {
                static::echo($v);
            }
            return;
        }
        var_export($value);
    }
    public static function toLine(string $str):string {
        return trim($str).static::$n;
    }
}