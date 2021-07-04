<?php
declare(strict_types=1);
use JetBrains\PhpStorm\Pure;

[$a,$b,$c,$d,$e] = UtilIO::getIntArray();
$candy = $a * ($b - $c);
$plainCandy = min(9, $candy); // ディスカウント適用のない範囲
$discountableCandy = max(0,$candy - 9); // ディスカウント適用のあり得る範囲
$upperBound = intval(floor($d/$e)) - 1; // ディスカウント適用の可能な上限（残余計算のため、1 セット分手前まで）
$n_10th = intval(floor($discountableCandy / 10)); // ディスカウント適用の可能な範囲で 10 個ごとのセットが何セットあるか

$m = min($upperBound,$n_10th); // ディスカウントが適用される 10 個ごとのセットが何セットか
$base = $d * ($m * 10) ; // 基本金額
$loopingEs = ($m*($m+1)/2)*$e*10; // ディスカウントされる金額

$rest = $discountableCandy - $m * 10; // ディスカウント適用可能範囲で、ディスカウントの上限を越えたか、または 10 個未満の範囲となったもの
$priceForRest =  $d - ($m+1) * $e; // 残余部分に適用される金額
$restPrice = $rest * $priceForRest;

UtilIO::echo($plainCandy * $d + $base - $loopingEs + $restPrice);

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
    #[Pure] public function exchange(int $index, int $value):Triple {
        $array = $this->items;
        $array[$index] = $value;
        return new Triple($array);
    }
}
