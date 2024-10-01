<?php

require_once "Book.php";

class PhysicalBook extends Book
{
    public $weight;

    public function __construct(string $title, string $author,int $price, int $weight)
    {
        parent::__construct(title: $title, author: $author, price: $price);
        $this->weight = $weight;
    }
    

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function print(): string
    {
        return "Physical Book: " . $this->title . ", " . $this->author . ", " . $this->weight;
    }
}