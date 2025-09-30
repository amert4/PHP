<?php
echo "Program Menghitung Nilai dari 100 sampai 1000:<br>";

// Inisialisasi: $i = 100 (mulai dari 100)
// Kondisi: $i <= 1000 (berhenti jika sudah mencapai 1000)
// Iterasi: $i++ (naik 1 setiap putaran)
for ($i = 100; $i <= 1000; $i++) {
    // Mencetak nilai i diikuti dengan spasi
    echo $i . " ";

    // Menambahkan baris baru setiap 10 angka agar output rapi
    if (($i - 99) % 10 == 0) {
        echo "<br>";
    }
}
?>

#studi kasus
#Berdasarkan kode PHP yang Anda berikan, yang menampilkan contoh struktur kontrol dasar (if/else, switch) dan perulangan (for, while), studi kasus yang paling relevan adalah dalam konteks Pemrosesan Data dan Pembuatan Laporan Dinamis di sebuah sistem informasi.
#Berikut adalah studi kasus sederhana di mana semua logika tersebut digunakan bersama:
#Studi Kasus: Sistem Penilaian Akademik Otomatis
#Bayangkan Anda bekerja sebagai pengembang di sebuah Sistem Informasi Akademik (SIA). Anda perlu membuat sebuah modul yang memproses nilai akhir mahasiswa dan menghasilkan laporan hasil studi individual.
<?php
// Bagian 1: IF ELSE
$nilai = 90;
echo "CONTOH IF ELSE <br>";
if ($nilai > 80) {
    echo "Selamat Anda mendapat grade A <br>";
} else {
    echo "Maaf Anda belum dapat grade A <br>";
}

// Bagian 2: SWITCH
echo "CONTOH SWITCH <br>";
switch ($nilai) {
    case 100:
        echo "Nilai yang dipilih 100 <br>";
        break;
    case 90:
        echo "Nilai yang dipilih 90 <br>";
        break;
}

// Bagian 3: FOR
echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

// Bagian 4: WHILE
echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping While ke : " . $j . "<br>";
    $j++;
}
?>