<?php  

require_once 'App/init.php';

// $produk1 = new Komik ("Sticth", "Hesti Marlina", "Yoga Pamungkas", 300000, 8 );
// $produk2 = new Game ("Mobil Legen", "Najwa Khaira Wilda", "Aska Sepia Nugraha", 300000, 6);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\service\user as serviceuser;
use App\produk\user as produkuser;

new serviceuser();
echo "<br>";
new produkuser();