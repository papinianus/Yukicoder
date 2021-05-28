<?php
$width = trim(fgets(STDIN));
$max = $width*$width;
$pos = new position(0,0, $width);
for($i = 1; $i <= $max; $i++) {
    $x = $pos->getX();
    $y = $pos->getY();
    position::$map[$y][$x] = substr("00".$i,-3);
    $pos->move();
}
ksort(position::$map);
foreach(position::$map as $yrow) {
    ksort($yrow);
    $ys[] = implode(" ",$yrow);
}
echo implode("\n", $ys);

class position {
    public static $map;
    private $x;
    private $y;
    private $direction = [[1,0],[0,1],[-1,0],[0,-1]];
    private $dirSize = 4;
    private $currentDir = 0;
    private $limit;

    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function __construct($x, $y, $limit) {
        $this->x = $x;
        $this->y = $y;
        $this->limit = $limit;
    }
    public function move() {
        if(!$this->movable()) {
            $this->rotate();
        }
        $this->x = $this->x + $this->direction[$this->currentDir][0];
        $this->y = $this->y + $this->direction[$this->currentDir][1];
    }
    public function movable() {
        $nextX = $this->x + $this->direction[$this->currentDir][0];
        if($nextX >= $this->limit || $nextX < 0) {
            return false;
        } 
        $nextY = $this->y + $this->direction[$this->currentDir][1];
        if($nextY >= $this->limit || $nextY < 0) {
            return false;
        }
        if(isset(self::$map[$nextY][$nextX])) {
            return false;
        }
        return true;
    }
    public function rotate() {
        $this->currentDir = ($this->currentDir+1) % $this->dirSize;
    }
}