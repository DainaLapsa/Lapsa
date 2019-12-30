<?php
class Product{
public function __construct(string name, double price_at_start, int amount_at_start)
{
    $this->name=$name;
    $this->price_at_start=$price_at_start;
$this->amount_at_start=$amount_at_start;}
public function print_product();
};