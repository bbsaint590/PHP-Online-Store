<?php

require_once 'src/Basket.php';
require_once 'src/Customer.php';
require_once 'src/PhysicalProduct.php';
require_once 'src/VirtualProduct.php';

$physprod1 = new PhysicalProduct('Football', 7.00, 3.34, 'A Nike football.');
$physprod2 = new PhysicalProduct('Gameboy', 50.00, 15.00, 'A classic Gameboy.');

$virprod1 = new VirtualProduct('By the Way album', 34.99, 500.00, 'MP3', "It's a great album.");
$virprod2 = new VirtualProduct('Californication album', 23.99, 1200.00, 'MP3', "It's an even better album.");

$cust = new Customer('Jeff', 'Jeff@hotmail.com', '31 Jeff Lane');
$cust2 = new Customer('Lucy', 'Lucy@gmail.com', '113 Forest Avenue');

$basket = new Basket();

$basket->addProduct($physprod1, $cust);
$basket->addProduct($physprod2, $cust);

$basket->addProduct($virprod1, $cust2);
$basket->addProduct($virprod2, $cust2);

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

    <?php echo "<p>{$basket->getDisplay()}</p>"; ?>

</ul>
</body>
</html>
