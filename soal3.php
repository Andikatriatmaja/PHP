<?php
$hari = "Rabu";
$seragam = "Batik";
if ($hari == "Senin") {
    if ($seragam == "Putih-Abu lengkap") {
        echo "Seragam Sudah Sesuai, Selamat Menjalani Hari Senin.";
    } else {
        echo "Seragam Tidak Sesuai, Mendapatkan Hukuman!";
    }
} elseif ($hari == "Selasa") {
    if ($seragam == "Putih-Abu") {
        echo "Seragam Sudah Sesuai, Selamat Menjalani Hari Selasa.";
    } else {
        echo "Seragam Tidak Sesuai, Mendapatkan Hukuman!";
    }
} elseif ($hari == "Rabu") {
    if ($seragam == "Batik") {
        echo "Seragam Sudah Sesuai, Selamat Menjalani Hari Rabu.";
    } else {
        echo "Seragam Tidak Sesuai, Mendapatkan Hukuman!";
    }
} elseif ($hari == "Kamis") {
    if ($seragam == "Pramuka") {
        echo "Seragam Sudah Sesuai, Selamat Menjalani Hari Kamis.";
    } else {
        echo "Seragam Tidak Sesuai, Mendapatkan Hukuman!";
    }
} elseif ($hari == "Jumat") {
    if ($seragam == "Koko") {
        echo "Seragam Sudah Sesuai, Selamat Menjalani Hari Jumat.";
    } else {
        echo "Seragam Tidak Sesuai, Mendaptakan Hukuman";
    }
} else {
    echo "Hari/Seragam Tidak Valid!";
}