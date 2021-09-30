<?php

use CetakInfoProsuk as GlobalCetakInfoProsuk;
use Produk as GlobalProduk;

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jumlahHalaman,
    $waktuMain,
    $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe )
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe; 
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap() {
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if($this->tipe == "Komik") {
        $str .= " - {$this->jumlahHalaman} Halaman.";
    }  else if($this->tipe == "Game") {
        $str .= " - {$this->waktuMain} Jam.";
    }

    return $str;

    }
}


class CetakInfoProduk {
  public function cetak($produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

// Komik : Masashi Kishimoto, Shounen Jump
// Game : Neil Druckman, Sony computer
// Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000)

// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Games : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) - 50 Jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();