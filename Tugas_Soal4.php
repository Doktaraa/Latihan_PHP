<?php
// Membuat array 3x3 angka acak
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk tabel
echo "Matriks 3x3:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung total semua elemen
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        $total += $nilai;
    }
}
echo "<br>Total semua elemen: $total";
?>
