<?php
$nama = "Muhammad Rivan Surya";
$input_nama = readline("Masukan Nama Anda: ");

if ($input_nama === $nama) {
    echo "Nama Sesuai: $input_nama\n";
    echo "=== Lanjut ke opsi selanjutnya ===\n";
    
} else {
    echo "Nama Tidak Sesuai!\n";
    exit(); 
}

$pilihan = (int)readline("Menu\n1. Cek Saldo
2. Tarik Tunai
3. Setor Tunai
4. Tranfer
5. keluar
Pilih menu (1-5):");

$nim = "2510393";
$saldo = 2510393;
$gagal ="nim tidak valid";

switch ($pilihan) {
    case 1:
        $input_nim = readline("Masukkan NIM Anda: ");
        if ($input_nim === $nim) {
            echo "Saldo Anda: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
        } else {
            echo $gagal . "\n";
        }
        break;
    case 2:
        $tarik = (int)readline("Masukkan jumlah tarik tunai: Rp. ");
        if ($tarik > $saldo) {
            echo "Saldo tidak mencukupi untuk tarik tunai sebesar Rp. " . number_format($tarik, 0, ',', '.') . "\n";
        } else {
            $saldo -= $tarik;
            echo "Tarik tunai sebesar Rp. " . number_format($tarik, 0, ',', '.') . " berhasil.\n";
            echo "Sisa saldo Anda: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
        }
        break;
    case 3:
        $setor = (int)readline("Masukkan jumlah setor tunai: Rp. ");
        $saldo += $setor;
        echo "Setor tunai sebesar Rp. " . number_format($setor, 0, ',', '.') . " berhasil.\n";
        echo "Saldo Anda sekarang: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
        break;
    case 4:
        $tranfer = (int)readline("Masukkan jumlah setor tunai: Rp. ");
        $saldo -= $tranfer;
        echo "Tranfer sebesar Rp. " . number_format($tranfer, 0, ',', '.') . " berhasil.\n";
        echo "Saldo Anda sekarang: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
        break;
    default:
        echo "Pilihan tidak valid. Silakan pilih menu antara 1-5.\n";
        break;
}
?>