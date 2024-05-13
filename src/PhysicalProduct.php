<?php

require_once '../src/Product.php';
class PhysicalProduct extends Product implements Displayable
{
private float $weight;

public function __construct(string $name, float $price, float $weight, string $description)
{
parent::__construct($name, $price, $description);
$this->weight = $weight;
}

public function getDisplay()
{
return "<ul><li>Product: {$this->name}</li> <li>Price: £{$this->price}</li> <li>Description: {$this->description}</li></ul>";
}

public function getShippingPrice(): float
{
$weight = $this->weight;
if ($weight < 10) {
$price = 5.99;
} elseif ($weight >= 10 && $weight < 100) {
$price = 10.99;
} else {
$price = 0;
}
return $price;
}
}

?>