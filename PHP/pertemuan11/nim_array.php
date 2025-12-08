<?php
// Input NIM
$nim = readline("Masukkan NIM: ");

// Ubah string menjadi array angka
$digit = array_map('intval', str_split($nim));

// Total
$total = 0;
foreach($digit as $d){
    $total += $d;
}

// Maks
$maks = max($digit);

// Minim
$minim = min($digit);

// Rata-rata
$rata = $total / count($digit);

// Reverse array
$rev = array_reverse($digit);


echo "Digit        : " . implode(" ", $digit) . PHP_EOL;
echo "Total        : " . $total . PHP_EOL;
echo "Maks         : " . $maks . PHP_EOL;
echo "Minim        : " . $minim . PHP_EOL;
echo "Rata-rata    : " . $rata . PHP_EOL;
echo "Reverse      : " . implode(" ", $rev) . PHP_EOL;
?>
