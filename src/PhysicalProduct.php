<?php

require_once 'Product.php';

class PhysicalProduct extends Product
{
    private float $weight;

    public function __construct(string $name, float $price, float $weight, string $description)
    {
        parent::__construct($name, $price, $description);
        $this->weight = $weight;
    }

    public function getDisplay(): string
    {
        return "<ul><li>Product: {$this->name}</li> <li>Price: £{$this->price}</li> <li>Description: {$this->description}</li></ul>";
    }

    public function getShippingPrice(): float
    {
        if ($this->weight < 10) {
            return 5.99;
        } elseif ($this->weight >= 10 && $this->weight < 100) {
            return 10.99;
        } else {
            return 0;
        }
    }
}

?>
