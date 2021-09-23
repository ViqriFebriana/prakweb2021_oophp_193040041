<?php

class produk
{
   public $judul,
      $penulis,
      $penerbit,
      $harga,
      $jmlHalaman,
      $waktuMain,
      $type;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->type = $type;
   }

   public function getLabel()
   {
      return "$this->penulis. $this->penerbit";
   }

   public function getInfoLengkap()
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

class CetakInfoProduk
{
   public function cetak(produk $produk)
   {
      $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}



$produk1 = new produk("Naruto", "Masashi kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
