<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
$umur = $thn_sekarang - $thn_lahir;
return $umur;
}
function perkenalan($nama, $salam="Assalamualaiku"){
echo $salam.", \n";
echo "Perkenalkan, nama saya ".$nama."\n";
// memanggil fungsi lain
echo "Saya berusia ". hitungUmur(2004, 2069) ." tahun\n";
echo "Senang berkenalan dengan anda\n";
}
// memanggil fungsi perkenalan
perkenalan("Rivan");
?>