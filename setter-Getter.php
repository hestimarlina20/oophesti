<?php  


class produk {
	private $judul,
	        $penulis,
	        $penerbit,
	        $harga,
	        $diskon = 0;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;


	}
	public function setJudul( $judul ){
		 $this->judul = $judul;
	}
	public function getJudul() {
		 return $this->judul = $judul;
	}

	public function setPenulis( $penulis ){
		$this->penulis = $penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit ( $penerbit ){
		$this->penerbit;
	}
	public function getPenerbit (){
		return $this->penerbit;
	}

	public function setDiskon( $diskon) {
		$this->diskon = $diskon;
    }
    public function getDiskon (){
    	return $this->diskon;
    }

    public function setHarga ( $harga){
    	$this->harga = $harga;
    }
    public function getHarga (){
    	return $this->harga - ($this->harga * $this->diskon / 100);

    }


    public function getLebel() {
    	return "$this->penulis, $this->penerbit";

    }

    public function getInfoProduk(){
    	$str = " {$this->judul} | {$this->getLebel() } (Rp. {$this->harga})";

    	return $str;
    }

}


class komik extends produk {
	public $jmlHalaman;

	public  function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;


	
	}


    public function getInfoProduk() {
    	$str ="komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    	return $str;
    }

 }

 class Game extends produk {
 	public $waktuMain;

 	public  function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

 		parent::__construct($judul, $penulis, $penerbit, $harga);

 		$this->waktuMain = $waktuMain;
 	}

 	public function getaInfoProduk(){
 		$str = " Game : " . parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
 		return $str;
 	}
}

class CetakInfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->harga})";
		return $str;
	}
}

$produk1 = new komik ("Sticth", "Hesti Marlina", "Yoga Pamungkas", 600000, 400);
$produk2 = new Game ("Mobil Lagen", "Najwa Khaira Wilda", "Aska Sepia Nugraha", 300000, 8);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Hesti Marlina Kusuma Diningrat");
echo $produk1->getpenulis();
