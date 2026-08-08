<?php
$seragam = "kaos";
$hari = "Senin";
if ($hari == "Senin" || $hari == "Selasa" || $hari == "Rabu" || $hari == "Kamis" || $hari == "Jumat") {
    if (($hari == "Senin" || $hari == "Selasa") && $seragam == "Putih Abu") {
        echo "Seragam sudah sesuai, Selamat menjalani hari $hari";    
    }elseif($hari == "Rabu" && $seragam == "Batik") {
        echo "Seragam sudah sesuai, Selamat menjalani hari $hari";
    }elseif($hari == "Kamis" && $seragam == "Pramuka") {
        echo "Seragam sudah sesuai, Selamat menjalani hari $hari";
    }elseif($hari == "Jumat" && $seragam == "Koko") {
        echo "Seragam sudah sesuai, Selamat menjalani hari $hari";
    }else{
        echo "Seragam tidak sesuai, mendapatkan hukuman!";
    } 

}else{
    echo "Ini hari libur! anda terlalu rajin.";
}