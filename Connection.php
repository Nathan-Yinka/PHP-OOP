<?php

class Connection
{
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}


$conn1 = new Connection();
$conn2 = new Connection();
$conn3 = new Connection();
$conn4 = new Connection();
$conn5 = new Connection();
$conn6 = new Connection();
echo Connection::getCount() .PHP_EOL;
$conn7 = new Connection();
$conn8 = new Connection();
$conn9 = new Connection();
$conn10 = new Connection();
$conn11 = new Connection();
$conn12 = new Connection();
$conn13 = new Connection();
$conn14 = new Connection();
$conn15 = new Connection();

echo Connection::getCount() .PHP_EOL;
