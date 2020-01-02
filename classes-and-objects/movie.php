<?php
class Movie
{
    public $title;
    public $studio;
    public $rating;
    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
}
$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG");
$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");
$movies = [$movie1, $movie2, $movie3];
function GetPG(array $movies): array
{
    $ratedMoviesArr = [];
    foreach ($movies as $key => $movie) {
        $movie->rating === "PG" ? $ratedMoviesArr[$key] = $movie->title : null;
    }
    return $ratedMoviesArr;
}
echo "PG movies listed: \n";
foreach (GetPG($movies) as $item) {
    echo $item . PHP_EOL;
}