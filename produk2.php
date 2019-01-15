<?php 

class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = "0";


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}


// $produk1 = new Produk();
// $produk1->judul = "Mariposa";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Casablanca";
// $produk2->tambahProperty = "alfi";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Mariposa";
$produk3->penulis ="LULUK HF";
$produk3->penerbit = "COCONUT";
$produk3->harga = 90000;

$produk4 = new Produk();
$produk4->judul = "Lady Killer";
$produk4->penulis ="Siti Umrotun";
$produk4->penerbit = "COCONUT";
$produk4->harga = 80000;

echo "Novel : ". $produk3->getLabel();
echo "<br>";
echo "<hr>";
echo "Buku : ".$produk4->getLabel();