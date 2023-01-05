<!-- create object orientasi programming protected and private -->

<?php
class product
{
  public $name;
  protected $price;
  private $discount;
  public function __construct($name, $price, $discount)
  {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }
  public function __destruct()
  {
    echo "Produk {$this->name} telah hancur <br>";
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

  public function setDiscount($discount)
  {
    $this->discount = $discount;
  }
}

class tv extends product
{
  public $type;
  public function __construct($name, $price, $discount, $type)
  {
    parent::__construct($name, $price, $discount);
    $this->type = $type;
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
  public function __construct($name, $price, $discount, $type)
  {
    parent::__construct($name, $price, $discount);
    $this->type = $type;
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
  public function __construct($name, $price, $discount, $type)
  {
    parent::__construct($name, $price, $discount);
    $this->type = $type;
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
  public function tambahProduk(product $produk)
  {
    $this->daftarProduk[] = $produk;
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

$produk1 = new tv("Samsung", 5000000, 0, "32 inch");
$produk2 = new laptop("Asus", 10000000, 0, "Core i7");
$produk3 = new smartphone("Iphone", 15000000, 0, "Iphone 11");

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);

echo $cetakProduk->cetak();