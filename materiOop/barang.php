<?php
// <!-- class laptop inherithen -->
class laptop
{
  var $pemilik = "Andi";
  var $merk = "Asus";

  public function __construct($pemilik, $merk)
  {
    $this->pemilik = $pemilik;
    $this->merk = $merk;
  }

  public function hidupkan_laptop()
  {
    return "Hidupkan Laptop $this->merk punya $this->pemilik";
  }

  public function __destruct()
  {
    echo "Laptop $this->merk punya $this->pemilik telah dimatikan";
  }
}

//class laptop_baru inherithen
class laptop_baru extends laptop
{
  var $pemilik = "Budi";
}

//instansiasi class laptop_baru
$laptop_baru = new laptop_baru("Budi", "Asus");

$hp = new laptop("arkun", "Hp Pavilion");
//panggil method dari class laptop
echo $hp->hidupkan_laptop();
echo "<br>";
echo $laptop_baru->hidupkan_laptop();
echo "<br>";