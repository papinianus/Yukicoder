<?php
$problemCount = trim(fgets(STDIN));
$ranks = array_fill(0, $problemCount,1);
$problems = explode(' ', trim(fgets(STDIN)));
$posts = trim(fgets(STDIN));
$scores = [];
$memo = [];

for($i = 0;$posts;$posts--, $i++)
{
    list($name, $problemCode) = explode(' ', trim(fgets(STDIN)));
    if(!isset($scores[$name]))
    {
        $scores[$name] = new scorenote($name, $problemCount);
    }
    $problemID = getID($problemCode);

    $stars = $problems[$problemID];
    $rank = $ranks[$problemID]++;
    $scores[$name]->setScore($problemID, calcScore($stars, $rank), $i);
}
foreach($scores as $name => $score)
{
    $board[] = [$name, $score->getSum(), $score->getLast()];
    $sums[] = $score->getSum();
    $lasts[] = $score->getLast();
}
array_multisort($sums, SORT_DESC, SORT_NUMERIC, $lasts, SORT_ASC, SORT_NUMERIC, $board);
$i = 1;
foreach($board as $row)
{
    echo $i.' '.$scores[$row[0]]->toString().PHP_EOL;
    $i++;
}

function getID($char)
{
    $alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ?';
    return strpos($alpha, $char);
}

function calcScore($stars, $rank)
{
    if(!isset($memo[$stars][$rank]))
    {
        $memo[$stars][$rank] = floor((50 * $stars) + ((50 * $stars) / (0.8 + (0.2 * $rank))));
    }
    return $memo[$stars][$rank];
}

class scorenote
{
    private $name;
    private $scores;
    private $sum;
    private $last;
    
    public function __construct($name, $count)
    {
        $this->name = $name;
        $this->scores = array_fill(0, $count, 0);
        $this->sum = 0;
        $this->last = 0;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function getSum()
    {
        return $this->sum;
    }
    public function getLast()
    {
        return $this->last;
    }
    
    public function toString()
    {
        $res = $this->name.' ';
        foreach($this->scores as $score)
        {
            $res .= $score.' ';
        }
        $res .= $this->sum;
        return $res;
    }
    
    public function setScore($problemId, $score, $last)
    {
        $this->scores[$problemId] = $score;
        $this->sum += $score;
        $this->last = $last;
    }
}
