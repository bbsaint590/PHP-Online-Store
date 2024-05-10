<?php

require_once 'src/Product.php';

class Basket implements Displayable
{
    private array $product = [];
    private string $customer;
    public function addProduct(Product $product, Customer $customer)
    {
        $this->product[] = $product;

    }

    public function getDisplay()
    {
        $display = "<h2>Products in Basket:</h2>";

        foreach ($this->product as $product) {
            $display .= $product->getDisplay();
        }

        return "<p>{$display}</p>";
    }
}

?>

<!--$display = "<h2>Products in Basket:</h2>";-->
<!--foreach ($this->products as $product) {-->
<!--$display .= $product->getDisplay();-->
<!--$display .= "<h3>Customer:</h3>";-->
<!--$display .= $this->customers->getDisplay();-->
<!--}-->
<!--return $display;-->