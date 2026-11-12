<?php
$data = null;
$error = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $nama = trim($_POST["nama"] ?? "");
 $nim = trim($_POST["nim"] ?? "");
 $prodi = trim($_POST["prodi"] ?? "");
 $semesterInput = $_POST["semester"] ?? "";
 $email = trim($_POST["email"] ?? "");
 if ($nama === "") $error[] = "Nama wajib diisi.";
 if ($nim === "") $error[] = "NIM wajib diisi.";
 if ($prodi === "") $error[] = "Program studi wajib diisi.";
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $error[] = "Format email tidak valid.";
 }
 if (!ctype_digit((string)$semesterInput) ||
 (int)$semesterInput < 1 || (int)$semesterInput > 14) {
 $error[] = "Semester harus berupa angka 1–14.";
 }
 if (!$error) {
 $data = compact("nama", "nim", "prodi", "email");
 $data["semester"] = (int)$semesterInput;
 }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Formulir Data Mahasiswa</title>
</head>
<body>
 <h1>Formulir Data Mahasiswa</h1>

 <form method="POST" action="">
 <p>
 <label for="nama">Nama:</label>
 <input id="nama" name="nama" type="text">
 </p>
 <p>
 <label for="nim">NIM:</label>
 <input id="nim" name="nim" type="text">
 </p>
 <p>
 <label for="prodi">Program Studi:</label>
 <input id="prodi" name="prodi" type="text">
 </p>
 <p>
 <label for="semester">Semester:</label>
 <input id="semester" name="semester" type="text">
 </p>
 <p>
 <label for="email">Email:</label>
 <input id="email" name="email" type="text">
 </p>
 <button type="submit">Kirim</button>
 </form>

 <?php if ($error): ?>
 <h3>Terdapat kesalahan:</h3>
 <ul>
 <?php foreach ($error as $pesan): ?>
 <li><?php echo htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"); ?></li>
 <?php endforeach; ?>
 </ul>
 <?php elseif ($data): ?>
 <h3>Ringkasan Data Mahasiswa</h3>
 <p>Nama: <?php echo htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8"); ?></p>
 <p>NIM: <?php echo htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8"); ?></p>
 <p>Program Studi: <?php echo htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8"); ?></p>
 <p>Semester: <?php echo htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8"); ?></p>
 <p>Email: <?php echo htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8"); ?></p>
 <?php endif; ?>
</body>
</html>
