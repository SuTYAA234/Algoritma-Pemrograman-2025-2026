<?php
$a = readline("masukan angka pertama:");
$b = readline("masukan angka kedua:");

if ($a>$b)
    echo "$a lebih besar dari $b\n";
elseif ($a<$b)
    echo "$a lebih kecil dari $b\n";
else
    echo "keduanya sama besar\n";

echo"apakah keduanya sama?";
echo ($a==$b)? "true\n":"false\n";
?>