<?php

require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";


$physicalBook = new PhysicalBook(title: "A random Book",author: "Nathan", price: 2000, weight: 10);
$digitalBook = new DigitalBook(title: "A digial Book",author: "Tjay", price: 1000,filesize: 10);

print $physicalBook->getAuthor() . PHP_EOL;
print $physicalBook->print() . PHP_EOL;

// the  information of the digital book
print $digitalBook->getAuthor() . PHP_EOL;
print $digitalBook->print(). PHP_EOL;
