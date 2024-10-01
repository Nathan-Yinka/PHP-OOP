<?php

class Song
{
    private int|float $rating;
    private string $title;

    public function __construct(string $title, int|float $rating)
    {
        $this->title = $title;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): int|float
    {
        return $this->rating;
    }

    public function setRating(int|float $rating): void
    {
        if ($rating < 0 ) $rating = 0;
        if ($rating > 5) $rating = 5;

        $this->rating = $rating;
    }

    public function setTitle(string $title): void 
    {
        $this->title = $title;
    }
}


$song = new Song(title: 'Hello', rating: 5.55);
echo $song->getTitle() . PHP_EOL;
echo $song->getRating() . PHP_EOL;

$song->setRating(rating: 6);
echo $song->getRating() . PHP_EOL;

$song->setRating(rating: -1);
echo $song->getRating() . PHP_EOL;

$song->setTitle(title: 'Hello World');
echo $song->getTitle() . PHP_EOL;