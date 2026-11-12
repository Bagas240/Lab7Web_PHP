<?php
// Eksperimen 1: nilai rata-rata dari tiga komponen nilai
$tugas = 85;
$uts = 78;
$uas = 90;
$rataRata = ($tugas + $uts + $uas) / 3;
echo "Tugas: " . $tugas . "<br>";
echo "UTS: " . $uts . "<br>";
echo "UAS: " . $uas . "<br>";
echo "Nilai rata-rata: " . number_format($rataRata, 2);
?>
