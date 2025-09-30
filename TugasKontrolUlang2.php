<?php
// Daftar harga barang
$barang = [
    "Pensil" => 3000,
    "Buku Tulis" => 12000,
    "Tas Sekolah" => 150000,
    "Pulpen" => 7000,
    "Kotak Pensil" => 45000,
    "Sepatu" => 200000,
    "Penghapus" => 2000
];

echo "=== Daftar Barang Promo (< Rp50.000) ===<br>";

foreach ($barang as $nama => $harga) {
    if ($harga < 50000) { // kontrol untuk filter
        echo $nama . " - Rp" . number_format($harga, 0, ',', '.') . "<br>";
    }
}
?>
