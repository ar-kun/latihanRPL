<!-- create object orientasi programming static keyword product -->
<!-- Contoh static keyword -->
<?php
// class ContohStatic
// {
//   public static $angka = 1;
//   public static function halo()
//   {
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

// echo "<hr>";

class Contoh
{
  public static $angka = 1;
  public function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();




class product
{
  public $name;
  public $price;
  public static $diskon = 0.5;
  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
  public function __destruct()
  {
    echo "Produk {$this->name} telah hancur";
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
    return $this->price - ($this->price * self::$diskon);
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }
  public function getLabel()
  {
    return "$this->name, $this->price";
  }
  public function getInfoProduk()
  {
    $str = "{$this->name} | {$this->getLabel()}";
    return $str;
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
  public function getInfoProduk()
  {
    $str = "Tv : " . parent::getInfoProduk() . " - {$this->type}";
    return $str;
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
  public function getInfoProduk()
  {
    $str = "Laptop : " . parent::getInfoProduk() . " - {$this->type}";
    return $str;
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
  public function getInfoProduk()
  {
    $str = "Smartphone : " . parent::getInfoProduk() . " - {$this->type}";
    return $str;
  }
}

class cetakInfoProduk
{
  public $daftarProduk = array();
  public function tambahProduk(product $product)
  {
    $this->daftarProduk[] = $product;
  }
  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";
    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}

$produk1 = new tv("Tv Samsung", 5000000, "Tv 32 Inch");
$produk2 = new laptop("Laptop Asus", 10000000, "Laptop Gaming");
$produk3 = new smartphone("Smartphone Xiaomi", 3000000, "Smartphone Android");

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
echo $cetakProduk->cetak();