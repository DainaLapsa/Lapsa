<?php


class Video
{
    public $ratings = [];

    public function getAverageRating(): float
    {
        $totalScore = 0;

        foreach ($this->ratings as $rating)
        {
            $totalScore += $rating->score;
        }

        return $totalScore / count($this->ratings);
    }

    public function addRating(Rating $rating)
    {
        $this->ratings []= $rating;
    }
}

class User
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Rating
{
    public $user;
    public $score;
    public $text;

    public function __construct(User $user, int $score, ?string $text = null)
    {
        $this->user = $user;
        $this->score = $score;
        $this->text = $text;
    }
}


$app = new Application();
$app->run();

$user = new User('John');

$video = new Video();
$video->addRating(new Rating($user, 10, 'dogshit movie'));
$video->addRating(new Rating($user, 5));
$video->addRating(new Rating($user, 3, null));
$video->addRating(new Rating($user, 5, 'bad movie'));

echo $video->getAverageRating();