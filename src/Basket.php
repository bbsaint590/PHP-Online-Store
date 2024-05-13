<?php
class Basket
{
    private array $product = [];
    public function addProduct(Product $product)
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