<?php
// ===============================
// Contoh kode awal (diperbaiki)
// ===============================
$a = "Hello";
$b = $a . " world!";   // concatenation (string)
echo $b . "<br>";
echo $a . " -- " . $b . " ini string operator" . "<br><br>";

// ===============================
// TUGAS 1: Demonstrasi type juggling
// ===============================
echo "<strong>Tugas 1 - Type conversion demo:</strong><br>";
$s1 = "10";
$s2 = "20";

// Meski $s1 dan $s2 adalah string, operator + akan melakukan konversi ke number
$sum = $s1 + $s2;
echo "\"$s1\" + \"$s2\" = " . $sum . " (tipe: " . gettype($sum) . ")<br><br>";

// ===============================
// TUGAS 2: Pembagian vs Modulo
// ===============================
echo "<strong>Tugas 2 - / vs % :</strong><br>";
$x = 10;
$y = 4;

echo "$x / $y = " . ($x / $y) . "  (division — may produce float)<br>";
echo "$x % $y = " . ($x % $y) . "  (modulo — remainder of integer division)<br><br>";

// Contoh casting sebelum modulo (jelas menggunakan integer)
$xFloat = 10.7;
$yFloat = 3.2;
echo "Casting example: (int)$xFloat % (int)$yFloat = " . ((int)$xFloat % (int)$yFloat) . "<br><br>";

// ===============================
// TUGAS 3: Gabungan string tugas1 dan tugas2 menjadi "9080"
// ===============================
echo "<strong>Tugas 3 - Concatenate to get '9080':</strong><br>";
$tugas1 = 90;
$tugas2 = 80;

// Gunakan operator concatenation '.' untuk menggabungkan angka menjadi string "9080"
$gabungan = $tugas1 . $tugas2;
echo "Result: " . $gabungan . " (tipe: " . gettype($gabungan) . ")<br><br>";

// ===============================
// Blok string yang diberikan (diperbaiki kutip & escape)
// ===============================
echo "<strong>String Examples:</strong><br>";

$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1 . "<br>";
// Tampilkan newlines HTML-friendly untuk $string2
echo nl2br($string2) . "<br>";
echo $string3 . "<br>";
echo $string4 . "<br>";
// $string5 berisi literal \n (karena single quotes), tidak jadi newline
echo $string5 . "<br>";
// $string6 akan menampilkan nama variabel secara harfiah karena single quotes
echo $string6 . "<br>";

?>
