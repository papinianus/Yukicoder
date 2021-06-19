<?php
declare(strict_types=1);

$n = UtilIO::getInt();
$list = [];
while($n > 0) {
    $list[] = UtilIO::getString();
    $n--;
}
usort($list, function(string $a, string $b):int {
    [$aa, $ab] = array_map('intval', explode(" ", $a));
    [$ba, $bb] = array_map('intval', explode(" ", $b));
    return ($aa/$ab > $ba/$bb) ? -1 : (($aa/$ab < $ba/$bb) ? 1 : 0);
});
UtilIO::echo($list);

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