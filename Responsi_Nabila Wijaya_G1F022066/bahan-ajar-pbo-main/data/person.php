<?php
// membuat kelas person
class Person{
    var string $nama;
    // gunakan nullable properti
    var ?string $alamat = null;
    // gunakan default value untuk properti 
    var string $negara = "indonesia";
    // buat function sayHello
    function sayHello(string $nama){
        echo "Hai semua $nama" . PHP_EOL;
    }
    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $nama)
    {
        if (is_null($nama)) {
            echo "dan nama panjang ku adalah Nabila $this->nama" . PHP_EOL;
        } else {
            echo "Hi $nama, Kenalin aku $this->nama" . PHP_EOL;
        }
    }
    // buat const author
    const AUTHOR = " B PBO  22";
    // buat function info untuk self keyword
    function info()
    {
        echo "salah satu mahasiswa dari kelas : " . self::AUTHOR . PHP_EOL;
    }
    // buat function constructor
    function __construct(string $nama, string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    // buat function destructor
    function __destruct()
    {
        echo "Object person $this->nama is destroyed" . PHP_EOL;
    } }
