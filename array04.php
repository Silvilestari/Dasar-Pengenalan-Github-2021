<?php

//Membuat array dua dimensi
$nilai=array(
 array(90,65,83),
 array(90,78,87),
 array(78,90,78)
);
 
//Akses elemen array 2 dimensi secara manual
echo "<strong>nilai array ditampilkan secara manual:</strong><br>";
echo $nilai[0][0]."  ".$nilai[0][1]."  ".$nilai[0][2]."<br>";
echo $nilai[1][0]."  ".$nilai[1][1]."  ".$nilai[1][2]."<br>";
echo $nilai[2][0]."  ".$nilai[2][1]."  ".$nilai[2][2]."<br><br>";
 
//Akses elemen array dengan menggunakan looping
echo "<b>Nilai array ditampilkan dengan looping bersarang :</b><br>";
for($baris=0;$baris<count($nilai);$baris++)
{
 for($kolom=0;$kolom<count($nilai[$baris]);$kolom++)
 {
  echo $nilai[$baris][$kolom]."   ";
 }
 echo "<br>";
}

?>