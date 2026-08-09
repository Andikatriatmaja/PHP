<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik 1 - Anka 1-100</title>
</head>
<body>
    <h2>Praktik 1 - Menampilkan deret Angka 1 sampai 100</h2>
    <p>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo $i .", ";
        }
    ?>
    <p>
</body>
</html>

    <title>Praktik 2 - Bilangan genap</title>
</head>
<body>
    <h2>Praktik 2</h2>
    <h3>Cara 1 : Bilangan Genap dengan FOR (Kelipatan 2)</h3>
    <?php
    for ($x = 2; $x <= 50; $x += 2) {
        echo "<span style='background:#e2e8f0; padding:3px 6px; margin:2px;'>" . $x . "</span>";
    }
    ?>

    <h3>Cara 2: Bilangan Genap dengan WHILE (Modulus 2)</h3>
    <?php
    $y = 1;
    while ($y <= 50) {
        if ($y % 2 == 0) { // Jika genap
            echo $y . " ";
        }
        $y++;
    }
    ?>
</body>
</html>

<?php
echo "<h2>Praktik 3 - Deret Bilangan Ganjil (1 - 35) dengan DO-WHILE</h2>";
$angka = 1;
do {
    if ($angka % 2 != 0) { // Tidak habis dibagi 2 (Ganjil)
        echo "<b>" . $angka . "</b>";
    }
    $angka++;
} while ($angka <= 35);
?>

<title>Praktik 4 - Tabel Perkalian</title>
    <style>
        .tabel-perkalian ( border-collapse: collapse; widht: 300px; font-family: Arial;)
        .tabel-perkalian th, .table-perkalian td ( border: 1px solid #94a3b8; padding: 6px; text-align: center; )
        .tabel-perkalian th (background-color: #2563eb; color: white; )
    </style>    
</head>
    <h2>Praktikum - 4</h2>
<body>
    <h3>Table Perkalian Angka 7</h3>
    <table class="table-perkalian">
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
        <?php
        $pengali = 7;
        for ($i = 1; $i <= 10; $i++) {
            $hasil = $pengali * $i;
            echo "<tr>";
            echo "<td>" . $pengali . " x " . $i . "</td>";
            echo "<td><strong>" . $hasil . "</strong></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<title>Praktik 5 - Segitiga</title>
    <style>
        .bintang { font-family: monospace; font-size: 16px; color: #1e3a8a}
    </style>
</head>
    <h2>Praktikum - 5</h2>
<body>
    <h3>Pola Segitiga Bintang Siku-Siku</h3>
    <div class="bintang">
        <?php
        $tinggi = 8; // Tinggi Segitiga 8 baris

        for ($baris = 1; $baris <= $tinggi; $baris++) {
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                echo "* &nbsp;";
            }
        }
        ?>
    </div>
</body>
</html>

<title>Praktik 6 - Persegi Bintang</title>
</head>
    <h2>Praktikum - 6</h2>
<body>
    <h3>Pola Persegi Matriks</h3>
    <div style="font-family: monospace; font-size: 16px; line-height: 1.3;">
        <?php
        $sisi = 6;
        for ($i = 1; $i <= $sisi; $i++) {    // Loop Baris
            for ($j = 1; $j <= $sisi; $j++) { // Loop Kolom
                echo "# &nbsp;";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>