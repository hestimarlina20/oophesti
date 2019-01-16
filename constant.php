<?php  

// define('NAMA', 'Hesti Marlina');
//echo NAMA;

//echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// const NAMA = 'Hesti';
// }


// echo Coba::NAMA;

// echo __LINE__;

//function coba() {
// return __FUNCTION__;
// }
// echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;












?>
