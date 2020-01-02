<?php
//
foreach (range(1, 10) as $number) {
    $numbers[]=$number;
}
echo"The first 10 natural numbers are:". implode(" ", $numbers) . ".\n";
