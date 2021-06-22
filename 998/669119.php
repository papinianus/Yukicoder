<?php
declare(strict_types=1);
$nums = UtilIO::getIntArray();
sort($nums);
$regular = range($nums[0],$nums[3]);
UtilIO::echoYNPascal(implode(",",$nums) === implode(",",$regular));

class UtilIO {
    // ToDo
    // bool をフレーズに変換して返す。そのときに、それらを Capital か Pascal か Lower かで選択
    // 配列を implode する補助
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