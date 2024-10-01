<?php
// this command here is going to make the php code strictly typed
declare(strict_types=1);

class Product {
    public $name = 'soap';
    public int $price = 0;  //cent

    public function priceAsCurrency($divisor=1, $currencySymbol = "$"): string{
        $priceAsCurrency = $this->price / $divisor;
        return "{$currencySymbol} {$priceAsCurrency}";
    }
}

$product1 = new Product();
print "{$product1->name}\n";
print "{$product1->price}\n";

// chaning the name property
$product1->name = 'shampoo';
$product1->price = 10;
$priceAsCurrency = $product1->priceAsCurrency(divisor:100, currencySymbol: "NGN");

print "{$product1->name}\n";
print "{$product1->price}\n";
print "{$priceAsCurrency}\n";


