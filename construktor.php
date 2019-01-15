<?php 

class Produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}



$produk1 = new Produk("Mariposa", "LULUK HF", "COCONUT", 90000);


$produk2 = new Produk("Lady Killer", "Siti Umrotun", "COCONUT", 80000);
$produk3 = new Produk("Little Sister");

echo "Novel : ". $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo "Buku : ".$produk2->getLabel();
var_dump($produk3);