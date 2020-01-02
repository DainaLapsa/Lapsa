<?php

class Video
{
    public $ratings = [];
    public function gwtAverageRating():float
    {
        $totalScore=0;

    }
    public function addRating($rating){
        $this->ratings[]=$rating;
    }
}

class User
{
    public function __construct(User $user, int $score, ? string $text=null)
    {
        $this->user=$user;
        $this->score=$score;
        $this->text=$this;
    }
}



$video->addRating(new Rating($user,10,'boring movie'));