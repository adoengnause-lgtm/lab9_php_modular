
<?php

require_once __DIR__ . '/helpers.php';

echo tampilkanSalam();

echo "<br><br>";

echo sapaPengguna("Rina");

echo "<br><br>";

echo "Luas persegi panjang: ";
echo hitungLuasPersegiPanjang(8, 5);

echo "<br><br>";

echo "25 Celsius = ";
echo konversiCelciusKeFahrenheit(25);
echo " Fahrenheit";

echo "<br><br>";

echo "Status nilai: ";
echo tentukanStatusNilai(85);

echo "<br><br>";

echo "Total belanja: ";
echo formatRupiah(hitungTotal(15000, 3));

?>