<?php
class Point
{
    public $x;
    public $y;
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

function swap_points($p1, $p2){
    $newX = $p1->x;
    $newY = $p1->y;
    $p1->x = $p2->x;
    $p1->y = $p2->y;
    $p2->x = $newX;
    $p2->y = $newY;
}

echo "(" . $p1->x . ", " . $p1->y . ")".PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")".PHP_EOL;