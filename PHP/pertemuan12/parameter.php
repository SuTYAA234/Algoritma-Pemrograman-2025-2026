<?php
// membuat fungsi
function perkenalan($nama, $salam){
echo $salam.",\n ";
echo "Perkenalkan, nama saya ".$nama."\n";
echo "Senang berkenalan dengan anda\n";
}
// memanggil fungsi yang sudah dibuat
perkenalan("Rivan Surya", "Hi");
echo "\n";
$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi
perkenalan($saya, $ucapanSalam);
?>