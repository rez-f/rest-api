<?php

$data = file_get_contents('coba.json');
$data2 = file_get_contents('coba.json');

$mahasiswa = json_decode($data);
$mahasiswi = json_decode($data2,true);

var_dump($mahasiswa);
echo '<h2>BATAS</h2>';
// var_dump($mahasiswi);
echo( $mahasiswi[1]['hobby'][1] );

?>