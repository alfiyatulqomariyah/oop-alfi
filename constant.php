<?php 

// define('NAMA', 'Alfiyatul');

// echo NAMA;

// echo "<hr>";

// const UMUR = 16;

// echo UMUR;


// class Coba {
// 	const NAMA = 'ICAA';
// }

// echo Coba::NAMA;


// // echo __FILE__;

// function Alfi() {
// 	return __FUNCTION__;
// }

// echo Alfi();


class Rpl {
	public $kelas = __CLASS__;
}

$a = new Rpl;
echo $a->kelas;