<?php
$problemCount = trim(fgets(STDIN));
$ranks = array_fill(0, $problemCount,1);
$problems = explode(' ', trim(fgets(STDIN)));
$posts = trim(fgets(STDIN));
$scores = [];
$memo = [];
$board = new scoreboard();

for(;$posts;$posts--)
{
    list($name, $problemCode) = explode(' ', trim(fgets(STDIN)));
    if(!isset($scores[$name]))
    {
        $scores[$name] = new scorenote($name, $problemCount);
    }
    $problemID = getID($problemCode);
    $stars = $problems[$problemID];
    $rank = $ranks[$problemID]++;
    $scores[$name]->setScore($problemID, calcScore($stars, $rank));
    $board->upsert($name, $scores[$name]->getSum());
}
$board->extract($scores);


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

class scoreboard
{
    private $table;
    private $members;
    
    public function __construct()
    {
        $this->members = [];
        $this->table = [];
    }
    
    public function upsert($name, $sum)
    {
        if($this->inMember($name))
        {
            array_splice($this->table, $this->members[$name], 1);
        }
        else
        {
            $this->members[$name] = count($this->members);
        }
        for($i = $this->members[$name];$i;$i--)
        {
            $prev = $i - 1;
            if($this->table[$prev][1] >= $sum)
            {
                break;
            }
        }
        array_splice($this->table, $i ,0, [[$name, $sum]]);
        $tableRows = count($this->table);
        for(;$i < $tableRows; $i++)
        {
            $this->members[$this->table[$i][0]] = $i;
        }
    }
    
    public function extract($persons)
    {
        foreach($this->table as $i => $row)
        {
            echo ($i+1).' '.$persons[$row[0]]->toString().PHP_EOL;
        }
    }
    
    private function inMember($name)
    {
        return isset($this->members[$name]);
    }
}

class scorenote
{
    private $name;
    private $scores;
    private $sum;
    
    public function __construct($name, $count)
    {
        $this->name = $name;
        $this->scores = array_fill(0, $count, 0);
        $this->sum = 0;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function getSum()
    {
        return $this->sum;
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
    
    public function setScore($problemId, $score)
    {
        $this->scores[$problemId] = $score;
        $this->sum += $score;
    }
}
