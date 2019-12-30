
<?php
function CozaLozaWoza(int $start, int $end)
{
    $count = 0;
    for ($i = $start; $i <= $end; $i++) {
        switch ($i) {
            case $i % 3 == 0:
                echo "Coza ";
                break;
            case $i % 5 == 0:
                echo "Loza ";
                break;
            case $i % 7 == 0:
                echo "Woza ";
                break;
            case $i % 3 == 0 && $i % 5 == 0:
                echo "CozaLoza ";
                break;
            case $i % 3 == 0 && $i % 7 == 0:
                echo "CozaWoza ";
                break;
            case $i % 7 == 0 && $i % 5 == 0:
                echo "LozaWoza ";
                break;

            default:
                echo $i . " ";
        }
        $count++;
        if ($count === 11) {
            echo "\n";
            $count = 0;
        }
    }
}
CozaLozaWoza(1, 110);