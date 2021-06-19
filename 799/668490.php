<?php
declare(strict_types=1);
[$a,$b,$c,$d] = UtilIO::getIntArray();
$between = array_reduce(range($a,$b),fn($carry,$item) => ($c <= $item && $item <= $d) ? $carry+1 : $carry,0);
UtilIO::echo(($b - $a + 1) * ($d - $c + 1) - $between);

function judge(string $str): bool {
    $len = strlen($str);
    if($len < 2) return false;
    if($str[0] !== "1") return false;
    for($i = 1; $i < $len; $i++) {
        if($str[$i] !== "3") return false;
    }
    return true;
}

class UtilIO {
    protected const YES = "YES";
    protected const NO = "NO";
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
    public static function echoYNCapital(bool $b) {
        static::echo($b ? UtilIO::YES : UtilIO::NO);
    }
    public static function echoYNPascal(bool $b) {
        static::echo($b ? ucwords(strtolower(UtilIO::YES)) : ucwords(strtolower(UtilIO::NO)));
    }
    public static function echoYNLower(bool $b) {
        static::echo($b ? strtolower(UtilIO::YES) : strtolower(UtilIO::NO));
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
        return trim($str).PHP_EOL;
    }
}