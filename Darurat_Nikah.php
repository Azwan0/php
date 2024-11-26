<?php

echo "Masukkan Umur Anda:";
// Membaca input dari pengguna
$umur = trim (fgets(STDIN));
echo "Hallo, Umur $umur wajib segera nikah lho !\n";

if ($umur<=25) {
echo "Halo, $umur belum wajib nikah! ";
} 
else {
    echo "Halo, $umur wajib segera nikah oiii!";
}

