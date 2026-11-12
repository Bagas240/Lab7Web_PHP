<!-- Eksperimen 2: contoh GET diubah agar dapat mencari nama dari array data sederhana -->
<form method="GET" action="">
 <label for="kata">Kata kunci:</label>
 <input id="kata" name="kata" type="text">
 <button type="submit">Cari</button>
</form>
<?php
$dataNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
if (isset($_GET["kata"])) {
 $kata = trim($_GET["kata"]);
 echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "<br>";
 $ditemukan = [];
 foreach ($dataNama as $nama) {
 if ($kata !== "" && stripos($nama, $kata) !== false) {
 $ditemukan[] = $nama;
 }
 }
 if ($ditemukan) {
 echo "<p>Hasil pencarian:</p><ul>";
 foreach ($ditemukan as $nama) {
 echo "<li>" . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "</li>";
 }
 echo "</ul>";
 } else {
 echo "<p>Nama tidak ditemukan.</p>";
 }
}
?>
