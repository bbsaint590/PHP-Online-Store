<?php

require_once 'src/Product.php';
class Customer implements Displayable
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

?>