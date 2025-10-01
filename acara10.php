#tugas nomer 1
<?php
function terbesar($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;

echo "Bilangan 1 = $bil1 <br>";
echo "Bilangan 2 = $bil2 <br>";
echo "Bilangan terbesar adalah: " . terbesar($bil1, $bil2);
?>

#menampilkan tanggal bulan dan tahun 
<?php
// Cara 1: menggunakan date()
echo "Tanggal sekarang: " . date("d-m-Y") . "<br>"; 
// d = tanggal, m = bulan, Y = tahun (4 digit)

// Cara 2: memisahkan jadi teks
echo "Hari ini tanggal " . date("d") . " bulan " . date("m") . " tahun " . date("Y");
?>

<?php
// Format: d = tanggal, m = bulan angka, Y = tahun 4 digit
echo "Tanggal sekarang: " . date("d-m-Y") . "<br>";

// Format dengan nama bulan lengkap
echo "Tanggal sekarang: " . date("d F Y") . "<br>";

// Format dengan nama bulan singkat
echo "Tanggal sekarang: " . date("d M Y") . "<br>";
?>
