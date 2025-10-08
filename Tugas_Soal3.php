<?php
$produk = [
    [
        "nama" => "Laptop",
        "kategori" => "Elektronik",
        "harga" => 8500000,
        "rating" => 4.8
    ],
    [
        "nama" => "Headphone",
        "kategori" => "Aksesoris",
        "harga" => 1200000,
        "rating" => 4.5
    ],
    [
        "nama" => "Smartphone",
        "kategori" => "Elektronik",
        "harga" => 9500000,
        "rating" => 4.9
    ]
];

// Cetak produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: {$tertinggi['nama']}<br>";
echo "Kategori: {$tertinggi['kategori']}<br>";
echo "Harga: Rp " . number_format($tertinggi['harga'], 0, ',', '.') . "<br>";
echo "Rating: {$tertinggi['rating']}<br>";
?>
