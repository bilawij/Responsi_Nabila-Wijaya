<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$nabila = new Person("<br>nabila", "bandung");

// tambahkan value nama di object
$nabila->nama = "nabila";

// panggil function sayHelloNull dengan parameter
$nabila->sayHelloNull("REG");

// buat object dari kelas person
$wijaya = new Person("<br>wijaya", "bengkulu");

// tambahkan value nama di object
$wijaya->nama = "wijaya";

// panggil function sayHelloNull dengan parameter null
$wijaya->sayHelloNull(null);
