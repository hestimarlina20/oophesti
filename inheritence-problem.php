<?php 


class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain,
	       $tipe;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
         $this->judul = $judul;
         $this->penulis = $penulis;
         $this->penerbit = $penerbit;
         $this->harga = $harga;
         $this->jmlHalaman = $jmlHalaman;
         $this->waktuMain = $waktuMain;
         $this->tipe = $tipe;
    }


    public function getLabel(){
    	return "$this->penulis, $this->penerbit";

    }

    public function getInfoLengkap() {
    	// komik : Sticht | Hesti Marlina, Yoga Pamungkas (Rp.50000) - 300 Halaman.
    	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    	if( $this->tipe == "komik") {
    		$str .= " - {$this->jmlHalaman} Halaman.";
    	} else if ( $this->tipe == "Game") {
    		$str.= " - {$this->waktuMain} jam.";
    	}

    	return $str;
    }

}


 class cetakInfoProduk {
 	public function cetak ( produk $produk){
 		$str = "{$produk->judul} | {$produk->getLabel()}";
 		return $str;
}

}



$produk1 = new produk("Sticht", "Hesti Marlina","Yoga Pamungkas", 800000, 100,0, "komik");
$produk2 = new produk("Mobil Legen", "Najwa Khaira Wilda", "aska Sepia Nugraha",540000, 0, 80, "Game");



echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();