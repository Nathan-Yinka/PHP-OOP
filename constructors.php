<?php
// this command here is going to make the php code strictly typed
declare(strict_types=1);

class Product {

    // this can be decleared inside the construct method
    // public $name;
    // public int $price; 

    public function __construct(public string $name = "soap", public int $price=10){
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor=1, $currencySymbol = "$"): string{
        $priceAsCurrency = $this->price / $divisor;
        return "{$currencySymbol} {$priceAsCurrency}";
    }
}


$product1  = new Product(name:"soap", price: 100);


print $product1->name . PHP_EOL;


// printing very details value of the object
// var_dump(value: $product1);