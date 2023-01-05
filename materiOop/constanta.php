<!-- create object orientasi programming constant product -->
<?php
// define('NAMA', 'arkun');

// class Coba
// {
//   // tidak bisa di simpan ke dalam kelas harus di simpan secara global
//   const NAMA = 'arkun';

//   public $kelas = __CLASS__;
// }

// echo Coba::NAMA;


echo __FILE__;

// echo __LINE__;


// function coba()
// {
//   return __FUNCTION__;
// }

// $obj = new Coba;
// echo $obj->kelas;


// class product
// {
//   public $name;
//   public $price;
//   public const DISKON = 0.5;
//   public function __construct($name, $price)
//   {
//     $this->name = $name;
//     $this->price = $price;
//   }
//   public function __destruct()
//   {
//     echo "Produk {$this->name} telah hancur";
//   }
//   public function getLabel()
//   {
//     return "$this->name, $this->price";
//   }
//   public function getInfoProduk()
//   {
//     $str = "{$this->name} | {$this->getLabel()} (Rp. {$this->price})";
//     return $str;
//   }
// }

// class tv extends product
// {
//   public $type;
//   public function __construct($name, $price, $type)
//   {
//     parent::__construct($name, $price);
//     $this->type = $type;
//   }
//   public function getInfoProduk()
//   {
//     $str = "Tv : " . parent::getInfoProduk() . " - {$this->type}";
//     return $str;
//   }
// }

// class laptop extends product
// {
//   public $type;
//   public function __construct($name, $price, $type)
//   {
//     parent::__construct($name, $price);
//     $this->type = $type;
//   }
//   public function getInfoProduk()
//   {
//     $str = "Laptop : " . parent::getInfoProduk() . " - {$this->type}";
//     return $str;
//   }
// }

// class smartphone extends product
// {
//   public $type;
//   public function __construct($name, $price, $type)
//   {
//     parent::__construct($name, $price);
//     $this->type = $type;
//   }
//   public function getInfoProduk()
//   {
//     $str = "Smartphone : " . parent::getInfoProduk() . " - {$this->type}";
//     return $str;
//   }
// }

// $product1 = new tv("Tv", "Rp. 1.000.000", "LED");
// $product2 = new laptop("Laptop", "Rp. 5.000.000", "Asus");
// $product3 = new smartphone("Smartphone", "Rp. 2.000.000", "Samsung");

// echo $product1->getInfoProduk();
// echo "<br>";
// echo $product2->getInfoProduk();
// echo "<br>";
// echo $product3->getInfoProduk();
// echo "<hr>";
// echo product::DISKON;