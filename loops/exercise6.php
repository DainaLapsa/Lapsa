<?php
echo "AsciiFigure.app started\n";
$size = readline("Please enter size of the figure(>1): ");
while (!ctype_digit($size) || $size < 2) {
    $size = readline("Invalid input. Please try again: ");
}
class AsciiFigure
{
    public function drawing(int $size)
    {
        $stars = 0;
        $lStripes = 4 * ($size - 1);
        $rStripes = 4 * ($size - 1);
        for ($i = $size; $i > 0; $i--) {
            for ($l = $lStripes; $l > 0; $l--) {
                echo '/';
            }
            for ($j = $stars; $j > 0; $j--) {
                echo '*';
            }
            for ($r = $rStripes; $r > 0; $r--) {
                echo '\\';
            }
            echo "\n";
            $stars += 8;
            $lStripes -= 4;
            $rStripes -= 4;
        }
    }
}
$ascii = new AsciiFigure();
$ascii->drawing($size);