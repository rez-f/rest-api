<?php

// $mahasiswa = [
//     [
//         "nama" =>  "Reza",
//         "nim" => "11651100402",
//         "email" => "moehamad@gmail.com"
//     ],
//     [
//         "nama" =>  "Asep",
//         "nim" => "20400116511",
//         "email" => "gmail@moehamad.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>