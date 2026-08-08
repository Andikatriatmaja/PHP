<?php
$absen = 5;
while ($absen <=40) {
    echo "antrian saat ini $absen"."<br>";
    $absen++;
} 

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if (($j+$i) % 2 == 0) {
            echo "X ";
        } else {
            echo "O ";
        }
    }

    echo "<br/>";
}