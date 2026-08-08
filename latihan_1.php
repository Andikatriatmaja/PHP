<?php
$username = "admin";
$password = 12345;
if ($username == "admin" && $password == 12345) {
    echo "Login berhasil!";
} else {
    echo "Username atau Password salah!";
}

echo "<br/><br/><br/>";

$stok = 5;
while ($stok >0) {
    echo "stok saat ini tersedia $stok" . '<br/>';
    $stok--; 
}

echo '<br/><br/><br/>';

$usia = 10;
$pendamping = "Orang tua";
if ($usia >= 17 || $pendamping == "Orang tua") {
    echo "boleh masuk";
}else{
    echo "tidak boleh masuk";
}


echo '<br/><br/><br/>';

$angka = 99;
do {
    echo "Eksekusi Do-while: angka adalah $angka" . '<br/>';
    $angka++;
} while ($angka <= 101);

echo '<br/><br/><br/>';

$nama = [
    "Fanny",
    "Kagura",
    "Ling",
    "Valir",
    "Paquito",
    "Wanwan",
    "Alice"
];

echo "<ol>";
foreach ($nama as $nilai) {
    echo "<li>$nilai<li/>";
}
echo "<ol/>";
