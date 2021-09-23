<?php

use produk as GlobalProduk;

class produk
{
   public $judul,
      $penulis,
      $penerbit,
      $harga,
      $jmlHalaman,
      $waktuMain;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
   }

   public function getLabel()
   {
      return "$this->penulis. $this->penerbit";
   }

   public function getInfoProduk()
   {
      // komik: natuto | Masashi kishimoto. Shonen Jump (Rp. 30000) - 100 halaman.
      $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      if ($this->type == "Komik") {
         $str .= " - {$this->jmlHalaman} Halaman.";
      } else if ($this->type == "Game") {
         $str .= " ~ {$this->waktuMain} jam.";
      }

      return $str;
   }
}


class Komik extends Produk
{
   public function getInfoProduk()
   {
      $str = "KomiK : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
      return $str;
   }
}

class Game extends Produk
{
   public function getInfoProduk()
   {
      $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam. ";
      return $str;
   }
}

class CetakInfoProduk
{
   public function cetak(produk $produk)
   {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}



$produk1 = new Komik("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0,);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
