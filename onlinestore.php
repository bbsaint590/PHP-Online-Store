<?php
class PhysicalProduct {
    private string $name;
    private float $price;
    private float $weight;
    private string $description;

    public function __construct(string $name, float $price, float $weight, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
    }

    public function getDisplay() {
        return "<ul><li>Product: {$this->name}</li> <li>Price: £{$this->price}</li> <li>Description: {$this->description}</li></ul>";
    }

    public function getShippingPrice(): float {
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

$physprod1 = new PhysicalProduct('Football', 7.00, 3.34, 'A Nike football.');
$physprod2 = new PhysicalProduct('Gameboy', 50.00, 15.00, 'A classic Gameboy.');


class VirtualProduct
{
    private string $name;
    private float $price;

    private float $fileSize;
    private string $fileType;
    private string $description;

    public function __construct(string $name, float $price, float $fileSize, string $fileType, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
        $this->description = $description;
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

$virprod1 = new VirtualProduct('By the Way album', 34.99, 500.00, 'MP3', "It's a great album.");
$virprod2 = new VirtualProduct('Californication album', 23.99, 1200.00, 'MP3', "It's an even better album.");

class Customer
{
    private string $name;
    private string $email;
    private string $address;
    public function __construct(string $name, string $email, string $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function getDisplay()
    {
        return "<ul><li>Name: {$this->name}</li> <li>Email: {$this->email}</li> <li>Address: {$this->address}</li></ul>";
    }

}

$cust = new Customer('Jeff', 'Jeff@hotmail.com', '31 Jeff Lane');
$cust2 = new Customer('Lucy', 'Lucy@gmail.com', '113 Forest Avenue');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP Scratchfiles</title>
</head>
<body>
<ul>
    <?php echo "<p>The first physical item is: {$physprod1->getDisplay()}</p>"; ?>
    <?php echo "<p>It will cost: £{$physprod1->getShippingPrice()} to ship.</p>"; ?>
    <?php echo "<p>The second physical item is: {$physprod2->getDisplay()}</p>"; ?>
    <?php echo "<p>It will cost: £{$physprod2->getShippingPrice()} to ship.</p>"; ?>

    <?php echo "<p>The first virtual item is: {$virprod1->getDisplay()}</p>"; ?>
    <?php echo "<p>It will cost: £{$virprod1->getShippingPrice()} to email.</p>"; ?>
    <?php echo "<p>The second virtual item is: {$virprod2->getDisplay()}</p>"; ?>
    <?php echo "<p>It will cost: £{$virprod2->getShippingPrice()} to email.</p>"; ?>

    <?php echo "<p>The first customer is: {$cust->getDisplay()}</p>"; ?>
    <?php echo "<p>The second customer is: {$cust2->getDisplay()}</p>"; ?>

</ul>
</body>
</html>
