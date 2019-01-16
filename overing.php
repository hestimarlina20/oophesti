<?php  


class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public  function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

    }

    public function getLabel () {
    	return "$this->penulis, $this->penerbit";

    }

    public function getInfoProduk() {
    	$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    	return $str;
    }

}


class komik extends produk {
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ){

   	parent:: __construct( $judul, $penulis, $penerbit, $harga);

   	$this->jmlhalaman = $jmlhalaman;


   }


   public function getInfoProduk() {
   	$str = "komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
   	return $str;
   }

}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

		parent:: __construct($judul, $penulis, $penerbit, $harga);

         $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
    	$str = " Game : " . parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
    	return $str;
    }
}

class cetakInfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new komik ("Sticth", "Hesti Marlina", "Yoga Pamngkas", 500000, 200);
$produk2 = new Game ("Mobil Legen", "Najwa Khaira Wilda", "Aska Sepia Nugraha", 800000, 8);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// echo "komik ; " . $produk1->getLabel();
// echo "<br>";
// echo "Game ; " . $produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new cetakInfoProduk();
// echo $infoproduk1->cetak($produk1);

