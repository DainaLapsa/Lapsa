<?php
class Geometry
{
    public static function circleArea(int $r)
    {
        echo $r >= 0 ? round(M_PI * ($r ^ 2), 2) : die("Error\n");
    }
    public static function rectangleArea(int $length, int $width)
    {
        echo $length >= 0 && $width >= 0 ? $length * $width : die("Error.\n");
    }
    public static function triangleArea(int $base, int $height)
    {
        echo $base >= 0 && $height >= 0 ? 0.5 * $base * $height : die("Error\n");
    }
}
