<?php
while(true){
    $nama=readline("Masukan nama Anda: ");
    $benar = strtolower(readline("Apakah nama sudah benar? (Y/N): "));

    if($benar === 'y'){
        break;

    }else{
        echo "Nama salah. Silakan masukkan nama lagi.\n";
    }
}

$nim=(int)readline("Masukan NIM Anda Untuk mengecek saldo:");

$saldo=$nim;

echo "Halo, $nama!\n";
echo "Saldo Anda adalah: Rp " . number_format($saldo, 0, ',', '.') . "\n";

$pilihan = (int)readline
("=====Menu=====
1. Cek Saldo
2. Tarik Tunai
3. Setor Tunai
4. Tranfer
5. keluar
Pilih menu (1-5):\n");

switch ($pilihan) {
    case 1:
        echo $nama . ",\n";
        echo "Saldo Anda adalah: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
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
        $tranfer = (int)readline("Masukkan jumlah tranfer: Rp. ");
        $saldo -= $tranfer;
        echo "Tranfer sebesar Rp. " . number_format($tranfer, 0, ',', '.') . " berhasil.\n";
        echo "Saldo Anda sekarang: Rp. " . number_format($saldo, 0, ',', '.') . "\n";
        break;
    case 5:
         echo "Keluar dari menu. Sampai jumpa lagi!\n";
        break;
    default:
        echo "Pilihan tidak valid. Silakan pilih menu antara 1-5.\n";
        break;
}



echo "\nTerima kasih telah menggunakan layanan kami!\n";
echo"==============";
?>
