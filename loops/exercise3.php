<?php
$word1 = readline("Please enter first word: ");
$word2 = readline("Please enter second word: ");
function twoWordsOneLine($word1, $word2)
{
$lenght = strlen($word1 . $word2);
echo $word1;
while ($lenght < 30) {
echo ".";
$lenght++;
}
echo $word2.PHP_EOL;
}
twoWordsOneLine($word1, $word2);