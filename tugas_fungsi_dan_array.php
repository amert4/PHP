<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil penjumlahan
$C = [];

// Looping untuk menjumlahkan elemen matriks
for ($i = 0; $i < 3; $i++) {         // Baris
    for ($j = 0; $j < 3; $j++) {     // Kolom
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil penjumlahan
echo "Hasil penjumlahan matriks A dan B:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "\n";
}
?>
