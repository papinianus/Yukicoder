<?php
declare(strict_types=1);

UtilIO::getString();
$as = UtilIO::getIntArray();
$bs = UtilIO::getIntArray();
$cs = UtilIO::getIntArray();
$ans = count_non_3n($as) * count_non_3n($bs) * count_non_3n($cs);

UtilIO::echo($ans);

function count_non_3n(array $nums): int {
    return count(array_filter($nums, fn($v) => $v % 3 !== 0));
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

function array_every(array $array, callable $callback, int $mode = 0): bool {
    foreach($array as $k => $v) {
        if(!arrayCallbackDelegate($callback, $k, $v, $mode)) return false;
    }
    return true;
}
function array_some(array $array, callable $callback, int $mode = 0): bool {
    foreach($array as $k => $v) {
        if(arrayCallbackDelegate($callback, $k, $v, $mode)) return true;
    }
    return false;
}
function array_zip(array $first, array $second, callable $callback): array {
    $result = [];
    foreach($first as $k => $v) {
        $result[$k] = $callback($v, $second[$k]);
    }
    return $result;
}
function arrayCallbackDelegate(callable $fn, string|int $key, mixed $value, int $mode = 0):mixed {
    return match ($mode) {
        ARRAY_FILTER_USE_BOTH => $fn($key, $value),
        ARRAY_FILTER_USE_KEY => $fn($key),
        default => $fn($value),
    };
}

class Triple {
    private array $items = [];
    public function __construct(array $array) {
        if(count($array) !== 3) throw new UnexpectedValueException("Array length should be 3.");
        if(array_some($array,fn($e) => !is_int($e))) throw new UnexpectedValueException("Every element should be integer.");
        $this->items = $array;
    }
    public function is_kadomatsu():bool {
        if ($this->items[0] === $this->items[1]) return false;
        if ($this->items[0] === $this->items[2]) return false;
        if ($this->items[1] === $this->items[2]) return false;
        if ($this->items[1] === max($this->items)) return true;
        if ($this->items[1] === min($this->items)) return true;
        return false;
    }
    public function getElementOf(int $index):int {
        if($index < 0 || $index > 2) throw UnexpectedValueException("Out of range: $index");
        return $this->items[$index];
    }
    public function exchange(int $index, int $value):Triple {
        $array = $this->items;
        $array[$index] = $value;
        return new Triple($array);
    }
}
