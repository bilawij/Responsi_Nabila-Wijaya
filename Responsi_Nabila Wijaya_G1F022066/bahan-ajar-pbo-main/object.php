<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("nabila","bengkulu");

// manipulasi properti nama, alamat, negara
$person->nama = "Nabila";
$person->alamat = "bengkulu";
$person->negara = "Indonesia";

// menampilkan hasil
echo "Nama = {$person->nama}" . PHP_EOL;
echo "<br>Alamat = {$person->alamat}" . PHP_EOL;
echo "<br>Negara = {$person->negara}" . PHP_EOL;
