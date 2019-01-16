<?php  


class produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	 public function getLabel() {
	 	return "$this->penulis, $this->penerbit";
	 }

}

// $produk1 = new produk ();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
//var_dump(expression)

$produk3 = new Produk();
$produk3->judul = "Hesti";
$produk3->penulis = "Hendi Setiadi";
$produk3->penerbit = "Atilah";
$produk3->harga = "70000";

$produk4 = new produk();
$produk4->judul = "Yoga";
$produk4->penulis = "Elan Suherlan";
$produk4->penerbit = "Yogi Pratama";
$produk4->harga = "650000";

// echo "komik : $produk3->penulis,$produk3->penerbit";

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();