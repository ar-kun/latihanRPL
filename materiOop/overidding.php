<!-- create object orientasi programming overriding -->

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
  // public function __destruct()
  // {
  //   echo "Produk {$this->name} telah hancur <br>";
  // }
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
    return "Beli Tv {$this->name} dengan harga {$this->price} dan type {$this->type}";
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
    return "Beli Laptop {$this->name} dengan harga {$this->price} dan type {$this->type}";
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
    return "Beli Smartphone {$this->name} dengan harga {$this->price} dan type {$this->type}";
  }
}

$tv = new product("Tv", "Rp. 1.000.000");
$laptop = new product("Laptop", "Rp. 2.000.000");
$smartphone = new product("Smartphone", "Rp. 3.000.000");
$tv = new tv("Tv", "Rp. 1.000.000", "LED");
$laptop = new laptop("Laptop", "Rp. 2.000.000", "Asus");
$smartphone = new smartphone("Smartphone", "Rp. 3.000.000", "Android");

echo $tv->beliTv();
echo "<br>";
echo $laptop->beliLaptop();
echo "<br>";
echo $smartphone->beliSmartphone();
echo "<br>";