<?php
$nama = readline("masukan nama barang: ");
$harga = (float)readline("masukan harga barang: ");
$jumlah = (int)readline("masukan jumlah barang: ");

$total = $harga * $jumlah;

if ($total > 39300) {
    $diskon = $total * 0.03;
} else {
    $diskon = 0;
}

$totalbayar = $total - $diskon;

echo "\n=========STRUK PEMBELIAN=========\n";
echo "Nama Barang   : $nama\n";
echo "Harga Barang  : Rp. $harga\n";
echo "Jumlah Barang : $jumlah\n";
echo "Total Harga   : Rp. $total\n";
echo "Diskon        : Rp. $diskon\n";
echo "Total Bayar   : Rp. $totalbayar\n";
echo "=================================\n";
?>