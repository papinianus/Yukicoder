<?php
declare(strict_types=1);
define("C10" , ".12345678910111213141516171819202122232425262728293031323334353637383940414243444546474849505152535455");
$d = UtilIO::getInt();
UtilIO::echo(C10[$d]);

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
/*
let c10 = "";
for(let i = 1; c10.length < 100; i++) {
  c10 = `${c10}${i}`;
}
console.log(c10);
*/