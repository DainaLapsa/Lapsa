<?php
function fifteen (int $first, int $secnd)
{
    if ($first or $secnd or $first - $secnd or $secnd - $first or $first + $secnd = 15) {
        echo 'true';
    } else {
        echo 'false';
    }
}
echo fifteen(3,5);