<?php

class Application
{
    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        //todo
    }

    private function rent_video()
    {
        //todo
    }

    private function return_video()
    {
        //todo
    }

    private function list_inventory()
    {
        //todo
    }
}

class VideoStore
{

}

class Video
{

}

$app = new Application();
$app->run();

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

$user = new User('John');

$video = new Video();
$video->addRating(new Rating($user, 10, 'dogshit movie'));
$video->addRating(new Rating($user, 5));
$video->addRating(new Rating($user, 3, null));
$video->addRating(new Rating($user, 5, 'bad movie'));

echo $video->getAverageRating();