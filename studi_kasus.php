<!DOCTYPE html>                                                          <!-- pembuka HTML -->
<html lang="id">                                                      <!-- menunjukan bahasa yang sering digunakan -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi-Kasus 1 - Sistem Kasir Mini</title>                       <!-- memberikan judul pada browser -->
     <style>                                                               <!-- memberi style/gaya atribut dari css --> 
        table {width: 100%; border-collapse: collapse; margin-top: 10px;}   
        th, td {border: 1px solid #cbd5e1; padding: 8px 12px;}
        th {background-color: #0f172a; color: white; text-align: left;}
        .total-arow {background-color: #e2e8f0; font-weight; bold;}
    </style>
</head>
<body>      
    <h1>Studi Kasus 1: Sistem kasir Mini (Daftar Produk Minimarke)</h1>                                                       <!-- halaman utama -->
    <h2>Sistem Kasir Mini - SMK Mart</h2>                          <!-- memberi judul pada halaman web dengan ukuran h2 -->
    <?php                                                           //pembuka PHP
    // Array multidimensi 10 produk
    $produk = [                                                         //array untuk mengurutkan data dalam variable
        ["nama" => "Beras Setra Ramos 5 Kg", "harga" => 74500],
        ["nama" => "Minyak Goreng Bimoli 2L", "harga" => 35000],
        ["nama" => "Gula Pasir Gulaku 1 Kg", "harga" => 17500],
        ["nama" => "Teh Celup Sosro Box", "harga" => 11000],
        ["nama" => "Kopi Kapal Api Spesial", "harga" => 14500],
        ["nama" => "Indomie  Goreng Spesial", "harga" => 3100],          //data dalam variable
        ["nama" => "Susu Kental Manis Indomilk", "harga" => 12500],
        ["nama" => "Sabun Mandi Lifebuoy", "harga" => 4500],
        ["nama" => "Shampo Clear Men 160ml", "harga" => 24000],
        ["nama" => "Pasta Gigi Pepsodent", "harga" => 13500],
    ];
    ?>                                                             <!-- penutup PHP -->

    <table>                                                    <!-- memberi tanda pada browser bahwa ini adalah tabel -->
        <tr>                                                   <!-- untuk garis border pada tabel -->
            <th style="width: 10%;">No</th>                    <!-- diberi style dari css untuk mengatur lebar -->
            <th>Nama Produk</th>                               <!-- untuk head atau isi paling atas pada tabel -->
            <th style="width: 25%;">Harga Satuan (Rp)</th>
        </tr>
        <?php
        $no = 1;                                                //variable untuk menyimpan data
        $total_harga = 0;

        foreach ($produk as $item) {                            //perulangan pada data yang ada di array
            echo "<tr>";
            echo "<td style='text-align: center;'>" . $no++ . "</td>";      //echo untuk menampilkan output
            echo "<td>" . $item['nama'] . "</td>";                         
            echo "<td>Rp " . number_format($item['harga'], 0, ', ', '.') . "</td>";
            echo "</tr>";

            // Akumulasi Total                                              //komentar pada php
            $total_harga += $item['harga'];
        }
        ?>                                                             <!-- tag penutup php -->
        <tr class="total-row">                                      <!-- memberi class supaya bisa di styling terpisah -->
            <td colspan="2" style="text-align: right;">TOTAL PEMBELIAN:</td>   <!-- isi data pada tabel -->
            <td>Rp <?= number_format($total_harga, 0, ', ', '.'); ?></td>
        </tr>
    </table>                                                               <!-- penutup table -->
</body>                                                                    <!-- penutup body -->
</html>                                                                    <!-- penutup html -->

<br><br><br><br>                                                     

<h1>Studi Kasus 2: Sistem Nilai Siswa (Lulus/Tidak Lulus)</h1>
<?php
$data_siswa = [
    ["nama" => "Ahmad Fauzi",           "nilai" => 85],
    ["nama" => "Bunga Lestari",         "nilai" => 70],
    ["nama" => "Chandra Wijaya",        "nilai" => 92],
    ["nama" => "Dewi Sartika",          "nilai" => 78],
    ["nama" => "Eko Prasetyo",          "nilai" => 65],
    ["nama" => "Fathur Rahman",         "nilai" => 88],
    ["nama" => "Gita Permata",          "nilai" => 74],
    ["nama" => "Hadi Saputra",          "nilai" => 80],
    ["nama" => "Indah Kusuma",          "nilai" => 95],
    ["nama" => "Joko Susilo",           "nilai" => 60]
];

echo "<h3>Laporan Evaluasi Hasil Belajar Siswa (KKM = 75)</h3>";
echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background: #1e293b; color: white;'><th>No</th><th>Nama Siswa</th><th>Nilai Akhir</th><th>Status Kelulusan</th></tr>";

$no = 1;
foreach ($data_siswa as $siswa) {
    if ($siswa['nilai'] >= 75) {                                                //kondisi dan perbandingan operator logika
        $status = "<span style='color: #059669; font-weight: bold;'>LULUS</span>";
    } else {                                                                    //jika kondisi tidak terpenuhi
        $status = "<span style='color: #dc2626; font-weight: bold;'>REMEDIAL</span>"; 
    }

    echo "<tr>";
    echo "<td align='center'>" . $no++ . "</td>";
    echo "<td>" . $siswa['nama'] . "</td>";
    echo "<td align='center'><strong>" . $siswa['nilai'] . "</strong></td>";
    echo "<td>" . $status . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<br><br><br><br>                             <!-- buat jarak antar baris seperti enter -->

<h1>Studi Kasus 3: Mesin Tiket Bioskop Otomatis (A001-A100)</h1>
<?php
echo "<h3>Generator Kode Tiket Bioskop Studio 1 (A001 - A100)</h3>";
echo "<div style='display: flex; flex-wrap: wrap; gap: 5px;'>";

for ($i = 1; $i <= 100; $i++) {                                         //perulangan yang bisa diatur mau berapa kali
    // membentuk format 3 digit dengan angka nol dari depan
    $nomor_tiket = "A" . str_pad($i, 3, "0", STR_PAD_LEFT);

    echo "<span style='background: #1e40af; color: white; padding: 4px 8px; border-radius: 4px; font-size: 11px;'>";
    echo $nomor_tiket;
    echo "</span>";
}

echo "</div>";
?>