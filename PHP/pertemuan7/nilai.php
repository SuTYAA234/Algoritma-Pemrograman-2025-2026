<?php 
$tugas = readline("Masukan Nilai tugas:");
$uts = readline("Masukan Nilai UTS:");
$uas = readline("Masukan NIlai UAS:");

$nilaiAkhir =(0.3* $tugas)+(0.3* $uts)+(0.4* $uas);

echo "Nilai Akhir = $nilaiAkhir\n";
if($nilaiAkhir>=60)
    echo"Status: LULUS\n";
else
    echo"Status: TIDAK LULUS\n";
?>