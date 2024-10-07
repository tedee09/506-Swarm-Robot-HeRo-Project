# Panduan Menjalankan Proyek Web dengan XAMPP

## 1. Unduh dan Instal XAMPP

- **Langkah 1:** Kunjungi [situs resmi XAMPP](https://www.apachefriends.org/index.html).
- **Langkah 2:** Pilih versi XAMPP yang sesuai dengan sistem operasi Anda (Windows, macOS, atau Linux) dan unduh.
- **Langkah 3:** Setelah selesai mengunduh, buka file installer dan ikuti petunjuk instalasi. Anda dapat memilih komponen yang ingin diinstal. Pastikan untuk mencentang `Apache` dan `PHP`.

## 2. Konfigurasi XAMPP

- **Langkah 1:** Setelah instalasi selesai, buka XAMPP Control Panel. Anda akan menemukan ikon XAMPP di desktop atau di menu start (Windows).
- **Langkah 2:** Pada XAMPP Control Panel, klik tombol `Start` di sebelah `Apache` untuk menjalankan server lokal.
- **Langkah 3:** Jika Apache berhasil dijalankan, Anda akan melihat indikator hijau dan dapat membuka browser untuk memeriksa apakah server berjalan dengan mengunjungi `http://localhost`.

## 3. Menyiapkan Proyek Web Anda

- **Langkah 1:** Salin folder proyek web Anda (yang berisi file PHP, HTML, CSS, dll.) ke dalam direktori `htdocs` di dalam folder instalasi XAMPP. Biasanya, path-nya adalah `C:\xampp\htdocs\`.
  - Misalnya, jika proyek Anda bernama `uts`, maka foldernya seharusnya berada di `C:\xampp\htdocs\uts`.
  
- **Langkah 2:** Pastikan struktur folder Anda di dalam `htdocs` terlihat seperti ini:
```
htdocs/
├── uts/
│   ├── css/
│   ├── images/
│   ├── js/
│   ├── bagian.php
│   ├── data_team.php
│   ├── index.php
│   ├── navbar.php
│   ├── project.php
│   └── ...
```

## 4. Menjalankan Proyek di Browser

- **Langkah 1:** Buka browser Anda (Chrome, Firefox, dll.) dan masukkan URL berikut:
http://localhost/uts/index.php
Gantilah `uts` dengan nama folder proyek Anda jika nama foldernya berbeda, kalau sama lanjut aja.

- **Langkah 2:** Jika semuanya terkonfigurasi dengan benar, Anda akan melihat halaman utama proyek web Anda.

# DAH ITU AJA KALO MASIH GA BISA CHAT AJA, MALES KALO JELASIN LAGI DISINI 
