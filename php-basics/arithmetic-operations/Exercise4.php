<?php
$start=1;
$end=10;
for ($i = $start; $i <= $end; $i++) {

    $array []=$i;

    $product=array_product($array);
}
echo $product;