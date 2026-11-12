# Lab7Web_PHP — Praktikum 7: Pemrograman Server-Side dengan PHP

Mata Kuliah: Pemrograman Web — Program Studi Teknik Informatika

## Tujuan Praktikum
- Memahami perbedaan pemrosesan client-side dan server-side.
- Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal.
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
- Menerima dan memproses data dari form HTML menggunakan metode GET dan POST.
- Melakukan validasi dan sanitasi input dasar sebelum data ditampilkan atau diproses.
- Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data pengguna.

## Materi Praktikum
Praktikum ini membahas pemrograman server-side dengan PHP:
- **Client-side dan server-side.** Client-side dijalankan di browser (HTML, CSS, JavaScript). Server-side dijalankan di server: menerima permintaan, memproses input, lalu mengirim respons ke browser. Kode PHP diproses server, browser hanya menerima hasil output seperti HTML.
- **Pengenalan PHP.** PHP (PHP: Hypertext Preprocessor) adalah bahasa server-side yang dapat disisipkan ke dalam HTML. File berekstensi `.php` harus dijalankan melalui web server.
- **Variabel dan tipe data.** Variabel diawali tanda `$` dan bersifat case-sensitive. Tipe data: string, integer, float, boolean, array, object, dan null.
- **Operator dan percabangan.** `if`, `elseif`, dan `else`.
- **Perulangan dan array.** `foreach` untuk menampilkan isi array.
- **Function.** Mengelompokkan kode yang dapat dipakai ulang.
- **Pemrosesan form: GET dan POST.** GET mengirim data lewat URL dan tidak cocok untuk data sensitif. POST mengirim data pada body permintaan, tetapi bukan enkripsi, sehingga perlu HTTPS.
- **Validasi dan sanitasi input.** Validasi di sisi server tetap wajib walaupun form sudah memakai atribut `required`. `htmlspecialchars()` dipakai saat menampilkan kembali input pengguna untuk mengurangi risiko injeksi HTML/script.

## Perangkat
- Laptop/PC
- Web browser
- Visual Studio Code
- PHP
- Server lokal (XAMPP/Laragon)

## Cara Menjalankan Server Lokal
1. Instal atau siapkan XAMPP/Laragon yang menyediakan PHP dan web server Apache.
2. Jalankan layanan web server (Apache) dari aplikasi tersebut.
3. Salin folder proyek ini ke direktori web server, misalnya `htdocs/Lab7Web_PHP` untuk XAMPP.
4. Buka melalui browser, misalnya `http://localhost/Lab7Web_PHP/` (jangan membuka file PHP dengan klik ganda).

## Struktur File
```
Lab7Web_PHP/
├── index.php            # Latihan 1–7 (satu halaman, dipisah per bagian)
├── mini_project.php     # Mini Project — Aplikasi Formulir Data Mahasiswa
├── eksperimen1.php      # Eksperimen 1 — Nilai rata-rata
├── eksperimen2.php      # Eksperimen 2 — Cari nama dari array dengan GET
├── eksperimen3.php      # Eksperimen 3 — Function format Rupiah
├── eksperimen4.php      # Eksperimen 4 — Validasi NIM
├── eksperimen5.php      # Eksperimen 5 — Tombol reset
├── screenshots/         # Screenshot output setiap latihan
└── README.md
```

## Ringkasan Hasil
| Bagian | File | Hasil |
|--------|------|-------|
| Latihan 1 | `index.php` | PHP berhasil dijalankan; browser menampilkan teks dan waktu server, bukan kode PHP. |
| Latihan 2 | `index.php` | Nilai akhir Siti 84,90 (tugas 85, UTS 78, UAS 90) dengan predikat B. |
| Latihan 3 | `index.php` | Daftar 7 mahasiswa tampil sebagai daftar bernomor dengan foreach. |
| Latihan 4 | `index.php` | Harga setelah diskon Rp135.000; function luas persegi panjang dan kelulusan berfungsi. |
| Latihan 5 | `index.php` | Kata kunci tampil di halaman dan terlihat pada URL (`?kata=...`). |
| Latihan 6 | `index.php` | Data diterima jika lengkap; input kosong ditolak; tanda kutip dan tag HTML tampil sebagai teks biasa. |
| Latihan 7 | `index.php` | Subtotal dihitung dari harga x jumlah; input tidak valid menampilkan pesan error. |
| Mini Project | `mini_project.php` | Data mahasiswa divalidasi di server; semua error ditampilkan, data valid ditampilkan sebagai ringkasan. |
| Eksperimen 1 | `eksperimen1.php` | Rata-rata tiga komponen nilai: 84,33. |
| Eksperimen 2 | `eksperimen2.php` | Pencarian nama dari array lewat GET. |
| Eksperimen 3 | `eksperimen3.php` | Function `formatRupiah()` mengubah angka menjadi format Rupiah. |
| Eksperimen 4 | `eksperimen4.php` | NIM hanya diterima jika berupa angka dengan panjang 10 digit. |
| Eksperimen 5 | `eksperimen5.php` | Tombol reset ditambahkan pada form mini project. |

### Perbedaan Tombol Reset dengan Pemrosesan Ulang di Server (Eksperimen 5)
Tombol reset (`type="reset"`) hanya bekerja di browser (client-side): isi kolom form dikembalikan ke nilai awal tanpa mengirim apa pun ke server dan tanpa memuat ulang halaman. Pemrosesan ulang di server terjadi ketika form dikirim kembali (submit atau refresh setelah POST): browser mengirim permintaan baru, PHP dijalankan lagi, dan halaman dibuat ulang dari hasil pemrosesan server. Reset juga tidak menghapus hasil atau pesan error yang sudah ditampilkan PHP di bawah form.

## Hasil dan Penjelasan
Latihan 1–7 berada dalam satu halaman `index.php` (`http://localhost/Lab7Web_PHP/`), masing-masing di bagian berjudul Latihan 1 sampai 7. Screenshot diambil dari bagian yang bersangkutan.

### Latihan 1 — Menjalankan PHP (`index.php`)
![Latihan 1](screenshots/latihan1.png)

File `index.php` berisi HTML dengan blok PHP di dalamnya. Perintah `echo` mencetak teks dan `date("d-m-Y H:i:s")` mengambil waktu server. Browser menampilkan teks "PHP berhasil dijalankan." dan waktu server, bukan kode PHP, karena kode PHP dijalankan oleh server dan browser hanya menerima hasil HTML-nya. Ini membuktikan file dijalankan lewat web server (`http://localhost/Lab7Web_PHP/`).

### Latihan 2 — Variabel, operator, dan percabangan (`index.php`)
![Latihan 2](screenshots/latihan2.png)

Nilai akhir dihitung dengan bobot tugas 30%, UTS 30%, dan UAS 40%: (85 x 0,30) + (78 x 0,30) + (90 x 0,40) = 84,90. Struktur `if`, `elseif`, dan `else` menentukan predikat: nilai 84,90 berada di rentang >= 75 dan < 85, sehingga predikatnya B. `number_format()` membatasi tampilan dua angka desimal dan `htmlspecialchars()` mengamankan nama saat ditampilkan.

### Latihan 3 — Perulangan dan array (`index.php`)
![Latihan 3](screenshots/latihan3.png)

Array `$mahasiswa` berisi 7 nama (4 dari modul ditambah Eka, Fajar, dan Gita). Perulangan `foreach` menampilkan setiap nama sebagai item `<li>` dalam daftar bernomor `<ol>`.

### Latihan 4 — Membuat function (`index.php`)
![Latihan 4](screenshots/latihan4.png)

Function `hitungDiskon()` mengurangi harga dengan persentase potongan: 150.000 dengan diskon 10% menjadi Rp135.000. Dua function tambahan sesuai perintah modul adalah `hitungLuasPersegiPanjang()` (8 x 4 = 32) dan `tentukanKelulusan()` (nilai 78 "Lulus", nilai 45 "Tidak Lulus"). Function membuat kode bisa dipakai ulang dan lebih rapi.

### Latihan 5 — Form dengan GET (`index.php`)
![Latihan 5](screenshots/latihan5.png)

Setelah form dikirim, data ikut terbawa di URL, misalnya `index.php?kata=php`. Hal ini terlihat pada kolom alamat browser. Karena data terlihat di URL, GET tidak boleh dipakai untuk kata sandi atau data sensitif. Kata kunci ditampilkan kembali dengan `htmlspecialchars()`.

### Latihan 6 — Form dengan POST (`index.php`)
Data lengkap:

![Latihan 6 data lengkap](screenshots/latihan6_lengkap.png)

Input dengan tanda kutip dan tag HTML:

![Latihan 6 karakter khusus](screenshots/latihan6_khusus.png)

Pada POST, data dikirim di body permintaan sehingga tidak tampil di URL. Server memeriksa kolom kosong dengan `trim()`; jika ada yang kosong, muncul "Semua kolom wajib diisi." Saat diuji dengan tag HTML seperti `<b>tes</b>` dan tanda kutip, teks tampil apa adanya dan tidak dieksekusi sebagai HTML, karena `htmlspecialchars()` mengubah karakter khusus menjadi entitas HTML.

### Latihan 7 — Pengolahan data sederhana (`index.php`)
Input valid:

![Latihan 7 valid](screenshots/latihan7_valid.png)

Input tidak valid:

![Latihan 7 tidak valid](screenshots/latihan7_tidak_valid.png)

PHP memeriksa nama barang tidak kosong, harga berupa angka dan tidak negatif, serta jumlah berupa bilangan bulat minimal 1. Jika semua valid, subtotal = harga x jumlah, ditampilkan dengan `number_format()`. Jika tidak valid (misalnya jumlah 0, negatif, atau bukan angka), muncul pesan "Periksa kembali nama barang, harga, dan jumlah." Validasi HTML (`min`, `step`, `required`) hanya membantu pengguna; pemeriksaan utama tetap dilakukan PHP di server.

### Mini Project — Formulir Data Mahasiswa (`mini_project.php`)
Data valid:

![Mini project valid](screenshots/mini_project_valid.png)

Data tidak valid (semua pesan error tampil):

![Mini project tidak valid](screenshots/mini_project_tidak_valid.png)

Form menerima nama, NIM, program studi, semester, dan email dengan metode POST. Validasi di server memeriksa: nama, NIM, dan program studi wajib diisi; email harus berformat valid (`filter_var` dengan `FILTER_VALIDATE_EMAIL`); semester harus bilangan bulat 1–14 (`ctype_digit`). Semua pesan error ditampung dalam array dan ditampilkan sekaligus. Jika tidak ada error, ringkasan data ditampilkan dengan `htmlspecialchars()`. Bagian pemrosesan ada di atas file dan bagian tampilan HTML di bawahnya, sehingga keduanya terpisah.

### Eksperimen 1 — Nilai rata-rata (`eksperimen1.php`)
![Eksperimen 1](screenshots/eksperimen1.png)

Rata-rata dihitung dari (85 + 78 + 90) / 3 = 84,33.

### Eksperimen 2 — Cari nama dengan GET (`eksperimen2.php`)
![Eksperimen 2](screenshots/eksperimen2.png)

Contoh Latihan 5 diubah agar kata kunci dicari di dalam array nama dengan `stripos()` (tidak membedakan huruf besar dan kecil). Contoh: kata kunci "ci" menampilkan "Citra"; kata yang tidak ada menampilkan "Nama tidak ditemukan."

### Eksperimen 3 — Function format Rupiah (`eksperimen3.php`)
![Eksperimen 3](screenshots/eksperimen3.png)

Function `formatRupiah()` memakai `number_format()` dengan pemisah ribuan titik, sehingga 150000 tampil sebagai Rp150.000.

### Eksperimen 4 — Validasi NIM (`eksperimen4.php`)
![Eksperimen 4](screenshots/eksperimen4.png)

NIM hanya diterima jika seluruhnya angka (`ctype_digit`) dan panjangnya tepat 10 digit sesuai ketentuan yang saya tetapkan (konstanta `PANJANG_NIM`). Jika tidak, muncul pesan "NIM harus berupa angka dengan panjang 10 digit."

### Eksperimen 5 — Tombol reset (`eksperimen5.php`)
![Eksperimen 5](screenshots/eksperimen5.png)

Tombol Reset dengan `type="reset"` ditambahkan pada form mini project. Perbedaannya dengan pemrosesan ulang di server dijelaskan pada bagian "Perbedaan Tombol Reset dengan Pemrosesan Ulang di Server" di atas.

## Kasus Uji Input
**Input valid**
1. Mini project: Nama `Bagas`, NIM `2024010001`, Program Studi `Teknik Informatika`, Semester `3`, Email `bagas@example.com` → ringkasan data mahasiswa ditampilkan.
2. Latihan 7 (`index.php`): Barang `Buku`, Harga `15000.50`, Jumlah `2` → subtotal ditampilkan.

**Input tidak valid**
1. Mini project: Email `bagas@` dan Semester `20` → muncul pesan "Format email tidak valid." dan "Semester harus berupa angka 1–14."
2. Latihan 7 (`index.php`): Barang `Pensil`, Harga `5000`, Jumlah `0` (atau negatif) → muncul pesan "Periksa kembali nama barang, harga, dan jumlah."

(Pengujian keamanan output: input `<b>"tes"</b>` pada Latihan 6 (`index.php`) tampil sebagai teks biasa karena `htmlspecialchars()`.)

## Screenshot
Semua screenshot disimpan di folder `screenshots/` dan ditampilkan pada bagian Hasil dan Penjelasan di atas.

## Referensi
1. Rencana Pembelajaran Semester (RPS) Mata Kuliah Pemrograman Web, bagian Pemrograman server-side dengan PHP: sintaks, variabel, function, form processing, dan pengolahan data.
2. PHP Manual. Getting Started. https://www.php.net/manual/en/getting-started.php
3. PHP Manual. Variables, Functions, and Handling External Variables. https://www.php.net/manual/en/
