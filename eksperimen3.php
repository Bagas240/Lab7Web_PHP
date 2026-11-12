<?php
// Eksperimen 3: function untuk mengubah format harga menjadi Rupiah
function formatRupiah($harga) {
 return "Rp" . number_format($harga, 0, ",", ".");
}

echo formatRupiah(150000) . "<br>";
echo formatRupiah(2500000) . "<br>";
echo formatRupiah(12500);
?>
