<?php

interface Displayable
{
    public function getDisplay(): string;
}

abstract class Product implements Displayable
{
    protected string $name;
    protected float $price;
    protected string $description;

    public function __construct(string $name, float $price, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public abstract function getDisplay(): string;

    public abstract function getShippingPrice(): float;
}

?>
