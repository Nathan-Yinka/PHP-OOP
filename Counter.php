<?php

class Counter
{
    public static int $count = 0;
}

Counter::$count++;
Counter::$count++;
Counter::$count++;
Counter::$count++;
Counter::$count++;
Counter::$count++;

print Counter::$count . PHP_EOL;