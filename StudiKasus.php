<?php
// 1. Login
$username = "admin";
$password = "12345";

if ($username == "admin" && $password == "12345") {
    echo "Login berhasil!<br>";
} else {
    echo "Login gagal!<br>";
}

// 2. Cek usia
$usia = 17;
if ($usia >= 18) {
    echo "Usia $usia tahun: boleh daftar.<br>";
} else {
    echo "Usia $usia tahun: belum boleh daftar.<br>";
}

// 3. Cek role user
$role = "user";
if ($role == "admin") {
    echo "Selamat datang Admin!<br>";
} elseif ($role == "user") {
    echo "Selamat datang Pengguna biasa.<br>";
} else {
    echo "Role tidak dikenali.<br>";
}

// 4. Cek stok barang
$stok = 0;
if ($stok > 0) {
    echo "Stok tersedia: $stok barang. Silakan beli.<br>";
} else {
    echo "Stok habis!<br>";
}

// 5. Penentuan nilai mahasiswa
$nilai = 75;
if ($nilai >= 80) {
    echo "Nilai: A<br>";
} elseif ($nilai >= 70) {
    echo "Nilai: B<br>";
} elseif ($nilai >= 60) {
    echo "Nilai: C<br>";
} else {
    echo "Nilai: D<br>";
}
?>
