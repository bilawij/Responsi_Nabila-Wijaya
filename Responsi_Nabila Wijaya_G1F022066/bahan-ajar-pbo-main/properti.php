<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Nabila","Lubuk Linggau");

// manipulasi properti nama person
$person1->nama = "Nabila Wijaya";

// menampilkan hasil
echo "Nama = {$person1->nama}" . PHP_EOL;
echo "<br>Alamat = {$person1->alamat}" . PHP_EOL;
echo "<br>negara = {$person1->negara}" . PHP_EOL;
