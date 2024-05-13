<?php

require_once '../index.php';
require_once '../src/PhysicalProduct.php';
require_once '../src/Product.php';

use PHPUnit\Framework\TestCase;

class PhysProdTest extends TestCase
{

    public function testPhysicalProdConstruct()
    {
        $physprodtest = new PhysicalProduct("Laptop", 882, 20.50, "An Apple Mac.");
        $this->assertInstanceOf(PhysicalProduct::class, $physprodtest);

        $name = $physprodtest->getDisplay();
        $this->assertSame("Laptop", $name);

        $price = $physprodtest->getDisplay();
        $this->assertSame(882, $price);

        $weight = $physprodtest->getDisplay();
        $this->assertSame(20.50, $weight);

        $description = $physprodtest->getDisplay();
        $this->assertSame("An Apple Mac.", $description);
    }



}