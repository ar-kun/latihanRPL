<?php

class Mahasiswa
{
  public $nama;
  public $nim;
  public $jurusan;
  public $angkatan = '2020';

  public function __construct($nama, $nim, $jurusan, $angkatan)
  {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    $this->angkatan = $angkatan;
  }

  public function berjalan()
  {
    return "Berjalan";
  }

  public function __destruct()
  {
    echo "Mahasiswa {$this->nama} telah selesai";
  }
}

class Dosen extends Mahasiswa
{
  public $nip;

  public function __construct($nama, $nim, $jurusan, $angkatan, $nip)
  {
    parent::__construct($nama, $nim, $jurusan, $angkatan);
    $this->nip = $nip;
  }

  public function mengajar()
  {
    return "Mengajar";
  }
}


$arkun = new Mahasiswa("Arkun", "123456789", "Teknik Informatika", "2020");

$agung = new Dosen("Agung", "987654321", "Teknik Informatika", "2020", "123456789");
// $arkun->nama = "Arkun";
// $arkun->nim = "123456789";
// $arkun->jurusan = "Teknik Informatika";
// $arkun->angkatan = "2020";
// var_dump($arkun);
echo "Ini Mahasiswa <br>";
echo "Nama : " . $arkun->nama . "<br>";
echo "NIM : " . $arkun->nim . "<br>";
echo "Jurusan : " . $arkun->jurusan . "<br>";
echo "Angkatan : " . $arkun->angkatan . "<br>";
echo "Status : " . $arkun->berjalan() . "<br>";

echo "Ini Dosen <br>";
echo "Nama : " . $agung->nama . "<br>";
echo "NIM : " . $agung->nim . "<br>";
echo "Jurusan : " . $agung->jurusan . "<br>";
echo "Angkatan : " . $agung->angkatan . "<br>";
echo "NIP : " . $agung->nip . "<br>";




// mothod person