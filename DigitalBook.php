<?php

require_once "Book.php";

class DigitalBook extends Book
{
    /** 
     * fileSize can be either an integer or a float
     */
    public int|float $fileSize;
    
    public function __construct(string $title, string $author, int $price, int $filesize)
    {
        parent::__construct(title: $title, author: $author, price: $price);
        $this->fileSize = $filesize;
    }

    public function print(): string
    {
        return "Digital Book: Title:{$this->title} Author:{$this->author} Price:{$this->price} FileSize{$this->fileSize}MB";
    }
}