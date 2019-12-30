<?php
class drawAGameBoard
{ public function __construct($board_size){
    $this->board_size=$board_size;
    $board_size = readLine ("What size of game board do you want me to print?");}

    public function horiz_line()
    {
        echo(" --- " * $board_size);
    }

    public function vert_line()
    {
        echo("|   " * ($board_size + 1));
    }

if(
$board_size > 0){
    new drawAGameBoard
}
