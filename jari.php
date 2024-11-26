<?php
function hitungJariJari($luas) {
    $pi = 3.14159;
    $jariJari = sqrt($luas / $pi);
    return $jariJari;
}

// Contoh penggunaan
$luasLingkaran = 100; // Contoh luas lingkaran
$jariJari = hitungJariJari($luasLingkaran);
echo "Jari-jari lingkaran dengan luas $luasLingkaran adalah: " . $jariJari;
?>