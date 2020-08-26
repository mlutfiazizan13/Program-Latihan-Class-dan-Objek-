<?php
class Mobil{
    // Property
    var $merk;
    var $harga;
    var $warna;
   
    // Method

    function __construct(){
        echo "Mulai Program <br><br>";
    }

    function __destruct(){
        echo "<br>Program Selesai";
    }

    function merk_mobil(){
        return "Merk mobil tersebut adalah Lamborghini <br>";
    }

    function warna_mobil() {
        return "Warna Mobil adalah biru <br>";
    }

    function harga_mobil(){
        return "Harga dari mobil adalah Rp 1.000.000.000 <br>";
    }

}

//object
$Mobil = new Mobil();

echo $Mobil->merk_mobil();
echo $Mobil->warna_mobil();
echo $Mobil->harga_mobil();


?>