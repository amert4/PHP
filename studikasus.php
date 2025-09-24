#studi kasus 1
<?php
$tanggal = date("d-m"); // Format: hari-bulan

if ($tanggal == "01-01") {
    echo "Selamat Tahun Baru!";
} elseif ($tanggal == "17-08") {
    echo "Selamat Hari Kemerdekaan RI 🇮🇩";
} elseif ($tanggal == "25-12") {
    echo "Selamat Hari Natal 🎄";
} else {
    echo "Hari ini bukan hari libur nasional khusus.";
}
?>

#studi kasus 2
<?php
$komentar = "Kamu itu bodoh banget!";

$kata_kasar = ["bodoh", "goblok", "tolol"];
$komentar_bersih = str_ireplace($kata_kasar, "[sensor]", $komentar);

echo "Komentar: " . $komentar_bersih;
?>

#studi kasus 3
<?php
$nilai = 76;

if ($nilai >= 85) {
    echo "Grade: A - Lulus";
} elseif ($nilai >= 75) {
    echo "Grade: B - Lulus";
} elseif ($nilai >= 65) {
    echo "Grade: C - Lulus";
} elseif ($nilai >= 50) {
    echo "Grade: D - Tidak Lulus";
} else {
    echo "Grade: E - Tidak Lulus";
}
?>

#studi kasus 4
<?php
$umur = 17;

if ($umur < 5) {
    echo "Gratis untuk balita.";
} elseif ($umur <= 12) {
    echo "Harga tiket: Rp10.000 (Anak-anak)";
} elseif ($umur <= 60) {
    echo "Harga tiket: Rp20.000 (Dewasa)";
} else {
    echo "Diskon Lansia! Harga tiket: Rp15.000";
}
?>

#studi kasus 5
<?php
$username = "dina";
$role = "admin"; // admin, user, guest

if ($role == "admin") {
    echo "Halo $username, Anda masuk sebagai Administrator.";
} elseif ($role == "user") {
    echo "Halo $username, Anda masuk sebagai Pengguna.";
} elseif ($role == "guest") {
    echo "Halo $username, Anda masuk sebagai Tamu.";
} else {
    echo "Peran tidak dikenali.";
}
?>
