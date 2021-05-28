<?php
$num = trim(fgets(STDIN));
$step = [0=>0,1=>1,2=>2,3=>3,5=>4]; //pos=>step //array_fillで-1？
$queue = [[5,3]]; //[pos,src]
$hist = [];
while(count($queue) > 0) {
    $cur = array_shift($queue);
    $curPlace = $cur[0]; //今いる位置
    $curStep = $step[$cur[1]]+1; //今いる位置に至るステップ=元いた位置+1
    $width = substr_count(decbin($curPlace), "1"); //今いる位置から進める距離
    $forward = $curPlace+$width; //前方の移動可能な位置
    $backward = $curPlace-$width; // 公報の移動可能な位置
    if($forward <= $num) { // 前方が移動可能圏内
        if(!isset($step[$forward]) ) { // 到達した事のある位置
            $step[$forward] = $curStep+1; //次の位置への到達ステップを記録、このロジックだと最初に到達したときが最短になるはず
            array_push($queue, [$forward, $curPlace]);
        }
    }
    if($backward > 0) { // 後方が移動可能圏内
        if(!isset($step[$backward]) ) {
            $step[$backward] = $curStep+1; //次の位置への到達ステップを記録
            array_push($queue, [$backward, $curPlace]);
        }
    }
}
if(isset($step[$num])) {
    echo $step[$num];
} else {
    echo -1;
}
echo PHP_EOL;