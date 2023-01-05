<!-- class school inheriten -->
<?php
class school
{
  public $name;
  public $address;
  public $phone;
  public $status;
  public $year;
  public function __construct($name, $address, $phone, $status, $year)
  {
    $this->name = $name;
    $this->address = $address;
    $this->phone = $phone;
    $this->status = $status;
    $this->year = $year;
  }
  public function berdiri($name, $year)
  {
    return "$name sekolah telah berdiri sejak tahun $year";
  }
  public function __destruct()
  {
    echo "Sekolah {$this->name} telah hancur";
  }
}

class student extends school
{
  public $nis;
  public function __construct($name, $address, $phone, $status, $year, $major, $nis)
  {
    parent::__construct($name, $address, $phone, $status, $year, $major);
    $this->nis = $nis;
  }
  public function belajar()
  {
    return "Belajar";
  }
}

class teacher extends school
{
  public $nip;
  public function __construct($name, $address, $phone, $status, $year, $nip)
  {
    parent::__construct($name, $address, $phone, $status, $year);
    $this->nip = $nip;
  }
  public function mengajar()
  {
    return "Mengajar";
  }
}

$ummi = new school("Universitas Muhammadiyah Sukabumi", "Jl. Syamsudin", "021-123456", "Swasta", "2002");
$sma = new school("SMA Negeri 1 Sukabumi", "Jl. Syamsudin", "021-123456", "Negeri", "2006");
$bachoya = new teacher("Bachoya", "Jl. Syamsudin", "021-123456", "Swasta", "2002", "123456789");
$michel = new student("Michel", "Jl. Syamsudin", "021-123456", "Swasta", "2002", "Teknik Informatika", "123456789");

echo "Ini Sekolah <br>";
echo "Nama : " . $ummi->name . "<br>";
echo "Alamat : " . $ummi->address . "<br>";
echo "Telepon : " . $ummi->phone . "<br>";
echo "Status : " . $ummi->status . "<br>";
echo "Tahun Berdiri : " . $ummi->year . "<br>";
echo "Status : " . $ummi->berdiri($ummi->name, $ummi->year) . "<br>";

echo "Ini Sekolah <br>";
echo "Nama : " . $sma->name . "<br>";
echo "Alamat : " . $sma->address . "<br>";
echo "Telepon : " . $sma->phone . "<br>";
echo "Status : " . $sma->status . "<br>";
echo "Tahun Berdiri : " . $sma->year . "<br>";
echo "Status : " . $sma->berdiri($sma->name, $sma->year) . "<br>";

echo "Ini Guru <br>";
echo "Nama : " . $bachoya->name . "<br>";
echo "Alamat : " . $bachoya->address . "<br>";
echo "Telepon : " . $bachoya->phone . "<br>";
echo "Status : " . $bachoya->status . "<br>";
echo "Tahun Berdiri : " . $bachoya->year . "<br>";
echo "Status : " . $bachoya->mengajar() . "<br>";

echo "Ini Siswa <br>";
echo "Nama : " . $michel->name . "<br>";
echo "Alamat : " . $michel->address . "<br>";
echo "Telepon : " . $michel->phone . "<br>";
echo "Status : " . $michel->status . "<br>";
echo "Tahun Berdiri : " . $michel->year . "<br>";
echo "Status : " . $michel->belajar() . "<br>";


?>