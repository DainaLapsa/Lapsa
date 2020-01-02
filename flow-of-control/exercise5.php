<?php
function PhoneKeyPadIf($string)
{
    $digits = '';
    $string = str_split(strtoupper($string));
    foreach ($string as $letter) {
        if ($letter === "A" || $letter === "B" || $letter === "C") {
            $digits .= 2;
        } elseif ($letter === "D" || $letter === "E" || $letter === "F") {
            $digits .= 3;
        } elseif ($letter === "G" || $letter === "H" || $letter === "I") {
            $digits .= 4;
        } elseif ($letter === "J" || $letter === "K" || $letter === "L") {
            $digits .= 5;
        } elseif ($letter === "M" || $letter === "N" || $letter === "O") {
            $digits .= 6;
        } elseif ($letter === "P" || $letter === "Q" || $letter === "R" || $letter === "S") {
            $digits .= 7;
        } elseif ($letter === "T" || $letter === "U" || $letter === "V") {
            $digits .= 8;
        } else {
            $digits .= 9;
        }
    }
    echo $digits . PHP_EOL;
}

function PhoneKeyPadSwitch($string)
{
    $digits = '';
    $string = str_split(strtoupper($string));
    foreach ($string as $letter) {
        switch ($letter) {
            case 'A':
            case 'B':
            case 'C':
                $digits .= 2;
                break;
            case 'D':
            case 'E':
            case 'F':
                $digits .= 3;
                break;
            case 'G':
            case 'H':
            case 'I':
                $digits .= 4;
                break;
            case 'J':
            case 'K':
            case 'L':
                $digits .= 5;
                break;
            case 'M':
            case 'N':
            case 'O':
                $digits .= 6;
                break;
            case 'P':
            case 'Q':
            case 'R':
            case 'S':
                $digits .= 7;
                break;
            case 'T':
            case 'U':
            case 'V':
                $digits .= 8;
                break;
            default:
                $digits .= 9;
        }
    }
    echo $digits . PHP_EOL;
}

$string = readline("Enter letters:");

while (!ctype_alpha($string)) {
    $string = readline('Invalid input. Please try again');
}
PhoneKeyPadIf($string);
PhoneKeyPadSwitch($string);