<?php  


class produk {
	public $judul,
	       $penulis,
	       $penerbit,
           $harga;


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;


 }


 public function getLabel() {
 	return "$this->penulis, $this->penerbit";

 }

}


class cetakInfoProduk {
public function cetak ( produk $produk) {
	$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
	return $str;
}

}



$produk1 = new produk("Sticht", "Hesti Marlina", "Yoga Pamungkas", 800000);
$produk2 = new produk("Mobil Legen", "Najwa Khaira Wilda", "Aska Sepia Nugraha", 540000);




echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new cetakInfoProduk();
echo $infoproduk1->cetak($produk1);