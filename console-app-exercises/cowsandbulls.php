<?php
$cows=0;
$bulls=0;
$randNum = str_split(strval(rand(1000,9999)));
$guess = readline('Let\'s play Cows and Bulls! Try to guess my 4 digit number:');

while ($guess!=$randNum)
{
    while (strlen($guess)!=4||!is_numeric($guess))
    {
        $guess = readline("Wrong input. Please try again: ");
    }
    $guess = str_split($guess);
    foreach($randNum as $key=>$digit)
    {
        if ($guess[$key] == $randNum[$key])
        {
            $cows++;
        }
        if ($guess[$key] != $randNum[$key] && in_array($guess[$key], $randNum))
        {
            $bulls++;
        }
    }

    echo $cows." cow, ".$bulls." bull".PHP_EOL;
    $guess = readline("Enter a 4-digit number: ");
    $cows=0; $bulls=0;
}
echo "Congratulations. You guessed my number!".PHP_EOL;
