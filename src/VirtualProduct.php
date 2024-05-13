<?php

require_once '../src/Product.php';
class VirtualProduct extends Product implements Displayable
{
private float $fileSize;
private string $fileType;

public function __construct(string $name, float $price, float $fileSize, string $fileType, string $description)
{
parent::__construct($name, $price, $description);
$this->fileSize = $fileSize;
$this->fileType = $fileType;
}

public function getDisplay()
{
return "<ul><li>Product: {$this->name}</li> <li>Price: £{$this->price}</li> <li>File type: {$this->fileType}</li> <li>Description: {$this->description}</li></ul>";
}

public function getShippingPrice(): float
{
$size = $this->fileSize;
if ($size > 1000) {
$price = 0.50;
} else {
$price = 0;
}
return $price;
}
}

?>