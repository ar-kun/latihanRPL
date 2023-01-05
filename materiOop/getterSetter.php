<!-- create object orientasi programming inheriten product getter and setter -->

<?php
class product
{
  public $name;
  public $price;
  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
  public function __destruct()
  {
    echo "Produk {$this->name} telah hancur <br>";
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
}

class tv extends product
{
  public $type;
  public function __construct($name, $price, $type)
  {
    parent::__construct($name, $price);
    $this->type = $type;
  }
  public function beliTv()
  {
    return "Beli Tv";
  }
}

class laptop extends product
{
  public $type;
  public function __construct($name, $price, $type)
  {
    parent::__construct($name, $price);
    $this->type = $type;
  }
  public function beliLaptop()
  {
    return "Beli Laptop";
  }
}

class smartphone extends product
{
  public $type;
  public function __construct($name, $price, $type)
  {
    parent::__construct($name, $price);
    $this->type = $type;
  }
  public function beliSmartphone()
  {
    return "Beli Smartphone";
  }
}

// create object
$tv = new product("Tv", "Rp. 3.000.000");
$tv->setName("Tv LG");
$tv->setPrice("Rp. 4.000.000");
$laptop = new product("Laptop", "Rp. 3.000.000");
$laptop->setName("Laptop HP");
$laptop->setPrice("Rp. 12.000.000");
$smartphone = new product("Smartphone", "Rp. 2.000.000");
// $smartphone->setName("Smartphone Samsung");
// $smartphone->setPrice("Rp. 5.000.000");

// Getter
echo $tv->getName() . " dengan harga " . $tv->getPrice() . " telah berhasil dibeli";
echo "<br>";
echo $laptop->getName() . " dengan harga " . $laptop->getPrice() . " telah berhasil dibeli";
echo "<br>";
echo $smartphone->getName() . " dengan harga " . $smartphone->getPrice() . " telah berhasil dibeli";
echo "<br>";