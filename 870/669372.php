<?php
declare(strict_types=1);
$pieces = [new piece(2,8,5,8),new piece(3,9,4,8),new piece(7,9,6,8),];
$n = UtilIO::getInt();
while($n > 0) {
    $step = UtilIO::getIntArray();
    foreach($pieces as $piece) {
        $piece->moveIfPossible(...$step);
    }
    $n--;
}
$ans = array_reduce(array_map(fn(piece $e):bool => $e->hasArrivedTarget(), $pieces), fn(bool $c, bool $i):bool => $c && $i, true);
UtilIO::echoYNCapital($ans);

class piece {
    private int $x;
    private int $y;
    private int $targetX;
    private int $targetY;
    public function __construct(int $x, int $y, int $targetX, int $targetY) {
        $this->x = $x;
        $this->y = $y;
        $this->targetX = $targetX;
        $this->targetY = $targetY;
    }
    public function moveIfPossible(int $currentX, int $currentY, int $nextX, int $nextY):void {
        if(!$this->existsAt($currentX, $currentY)) return;
        $this->x = $nextX;
        $this->y = $nextY;
    }
    private function existsAt(int $x, int $y):bool {
        return $this->x === $x && $this->y === $y;
    }
    public function hasArrivedTarget():bool {
        return $this->x === $this->targetX && $this->y === $this->targetY;
    }
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