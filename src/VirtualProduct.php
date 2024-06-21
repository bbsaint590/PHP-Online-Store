<?php

require_once 'Product.php';

class VirtualProduct extends Product
{
    private float $fileSize;
    private string $fileType;

    public function __construct(string $name, float $price, float $fileSize, string $fileType, string $description)
    {
        parent::__construct($name, $price, $description);
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
    }

    public function getDisplay(): string
    {
        return "<ul><li>Product: {$this->name}</li> <li>Price: £{$this->price}</li> <li>File type: {$this->fileType}</li> <li>Description: {$this->description}</li></ul>";
    }

    public function getShippingPrice(): float
    {
        return $this->fileSize > 1000 ? 0.50 : 0;
    }
}

?>
