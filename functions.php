
<?php

// Function untuk menampilkan salam
function tampilkanSalam() {
    return "Selamat belajar PHP modular!";
}

// Function untuk menyapa pengguna
function sapaPengguna($nama) {
    return "Halo, " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
}

// Function untuk menghitung luas persegi panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Function untuk mengubah Celsius ke Fahrenheit
function konversiCelciusKeFahrenheit($c) {
    return ($c * 9/5) + 32;
}

// Function untuk menentukan status nilai
function tentukanStatusNilai($nilai) {
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}

// Function untuk menghitung total belanja
function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}

// Function untuk format Rupiah
function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

?>