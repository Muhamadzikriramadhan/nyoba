<?php
$nis = "11900518";
$nama = "M Zikri Ramadhan";

echo "NIS    : " . $nis . "<br>";
echo "Nama   :$nama<br>";

echo "==========================<br>";

$nis1 = "11900518";
$nama1 = 'Muhamad Zikri Ramadhan';
$umur = 16;
$nilai = 83.25;
$status = false;

echo "NIS   :" . $nis1 . "<br>";
echo "Nama  : $nama1<br>";
print "Umur  : " . $umur; print "<br>";
printf ("Nilai  : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif<br>";

echo "==========================<br>";

$gaji = 1000000;
$pajak = 0.1;
$htp = $gaji - ($gaji*$pajak);

echo "Gaji awal = $gaji<br>";
echo "Setelah Terkena Pajak = Rp. $htp<br>";

echo "==========================<br>";

$nilai1 = 80;

if ($nilai1 >= 75 )
    echo "Nilai anda $nilai1, Anda Lulus";
else
    echo "Nilai anda $nilai1, Anda tidak Lulus";
   
echo "<br>==========================<br>";

$user = "Bangzik";
$pw = "291003";

if ($user == "Bangzik" && $pw = "291003" )
    echo "LOGIN BERHASIL";
else
    echo "LOGIN GAGAL";

echo "<br>==========================<br>";

$user1 = "" ;
if (!isset($user1)){
    echo "Variable tidak ada (Belum ada)";
}
else{
    echo "Variabel ada";
}

echo "<br>==========================<br>";

?>