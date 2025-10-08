#SOAL ARRAY 1-4
#NOMOR 1
<?php
// Array 2 dimensi berisi data siswa: [Nama, Umur, Kota Asal]
$siswa = [
    ['Andi Ferdiansyah', 19, 'Bogor'],
    ['Budi Utomo', 18, 'Bandung'],
    ['Citra Adelia', 18, 'Surabaya']
];

// Cetak Kota Asal dari siswa ke-2
echo "Kota asal dari siswa ke-2: " . $siswa[1][2] . "<br><br>";

// Cetak semua data siswa
echo "Data Semua Siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Siswa ke-" . ($i + 1) . ":<br>";
    echo "Nama: " . $siswa[$i][0] . "<br>";
    echo "Umur: " . $siswa[$i][1] . "<br>";
    echo "Kota Asal: " . $siswa[$i][2] . "<br><br>";
}
?>

#NOMOR 2
<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $harga = $buah[$i][1];
    $stok = $buah[$i][2];
    $subtotal = $harga * $stok;
    $total += $subtotal;
}

echo "Total nilai semua stok buah: Rp " . number_format($total, 0, ',', '.');
?>

#NOMOR 3
<?php
// Array asosiatif multidimensi: data 3 produk
$produk = [
    [
        'nama_produk' => 'Nasi Pecel ',
        'kategori' => 'Makanan Berat',
        'harga' => 18000,
        'rating' => 4.8
    ],
    [
        'nama_produk' => 'Soda Gembira',
        'kategori' => 'Minuman',
        'harga' => 8000,
        'rating' => 4.5
    ],
    [
        'nama_produk' => 'Cheesee Cake',
        'kategori' => 'Dessert',
        'harga' => 12000,
        'rating' => 4.7
    ]
];

// Cari produk dengan harga tertinggi
$produk_termahal = $produk[0]; // Asumsikan produk pertama adalah yang termahal

foreach ($produk as $p) {
    if ($p['harga'] > $produk_termahal['harga']) {
        $produk_termahal = $p;
    }
}

// Cetak hasil
echo "Produk dengan harga tertinggi:<br>";
echo "Nama Produk: " . $produk_termahal['nama_produk'] . "<br>";
echo "Kategori: " . $produk_termahal['kategori'] . "<br>";
echo "Harga: Rp " . number_format($produk_termahal['harga'], 0, ',', '.') . "<br>";
echo "Rating: " . $produk_termahal['rating'];
?>

#SOAL NOMOR 4
<?php
// Inisialisasi array 3x3 dengan angka acak (1–9)
$matriks = [];
$total = 0;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angka = rand(2, 20);
        $matriks[$i][$j] = $angka;
        $total += $angka;
    }
}

// Cetak array dalam bentuk matriks (tabel HTML)
echo "<h3>Matriks 3x3:</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriks[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table><br>";

// Cetak jumlah total
echo "<strong>Jumlah total semua elemen: $total</strong>";
?>


