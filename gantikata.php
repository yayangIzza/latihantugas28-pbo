<?php

echo "Nama  : Yayang Izzatul Haq<br>";
echo "NIM   : 22205052<br>";
echo "Kelas : PBO<br>";


echo "=====Program Mengganti Kata=====<br>";
echo "masukkan kata : aku ya aku. ga ada yang sama seperti aku. aku itu unik. aku itu langka. aku itu karakter.<br>";
echo "ganti kata : aku<br>";
echo "menjadi kata : rizki<br>";

echo "=====Hasil Formatting=====<br>";
echo "kalimat awal : aku ya aku. ga ada yang sama seperti aku. aku itu unik. aku itu karakter.<br>";
$string = 'aku ya aku. ga ada yang sama seperti aku. aku itu unik. aku itu langka. aku itu karakter.<br>';
$newString = str_replace('aku', 'rizki', $string);
echo "kalimat baru :" ;
echo $newString;

?>