# 🚀 PortoDev - Professional Portfolio & Admin Dashboard

PortoDev adalah aplikasi manajemen portofolio modern yang dibangun menggunakan ekosistem **Laravel 11**. Aplikasi ini dirancang untuk memamerkan proyek profesional dengan antarmuka yang memukau bagi pengunjung, serta panel kontrol yang kuat bagi admin.



---

## 🌟 Fitur Utama

### 🖥️ Sisi Pengunjung (Public View)
- **Modern UI/UX**: Menggunakan Tailwind CSS dengan font Plus Jakarta Sans yang elegan.
- **Dynamic Project Showcase**: Card proyek dengan identitas warna otomatis berdasarkan teknologi yang digunakan.
- **Instant Detail View**: Menggunakan **Alpine.js** untuk menampilkan detail proyek dalam modal tanpa memuat ulang halaman.
- **Dark Mode Hero**: Section pertama yang futuristik dengan gradasi teks dan efek blur.

### 🔐 Sisi Admin (Dashboard)
- **Secure Authentication**: Sistem login manual yang aman dengan proteksi Middleware.
- **Management Project (CRUD)**: Panel lengkap untuk Menambah, Melihat, Mengubah, dan Menghapus data proyek.
- **Interactive Feedback**: Integrasi **SweetAlert2** untuk konfirmasi penghapusan data dan notifikasi sukses.
- **Sidebar & Responsive Table**: Navigasi admin yang ramping dan tabel data yang ramah perangkat mobile.

---

## 🏗️ Struktur Database

Aplikasi ini menggunakan dua tabel utama untuk menjalankan fungsinya:

### 1. Tabel `users` (Autentikasi Admin)
Digunakan untuk menyimpan kredensial login admin. Berdasarkan data terbaru, berikut adalah skema akun yang tersedia:
| Kolom | Tipe | Deskripsi |
|---|---|---|
| `id` | BigInt (PK) | ID unik user |
| `name` | String | Nama lengkap admin |
| `email` | String (Unique) | Email untuk login |
| `password` | String | Password yang telah di-hash (Bcrypt) |

### 2. Tabel `projects` (Konten Portofolio)
Digunakan untuk menyimpan data karya yang ditampilkan.
| Kolom | Tipe | Deskripsi |
|---|---|---|
| `id` | BigInt (PK) | ID unik proyek |
| `judul` | String | Nama proyek |
| `slug` | String (Unique) | URL ramah SEO |
| `deskripsi` | Text | Penjelasan detail proyek |
| `tech_stack` | String | Teknologi yang digunakan (koma-separated) |
| `tahun` | Year | Tahun pembuatan proyek |
| `url_repositori` | String | Link GitHub/GitLab |

---

## 🛠️ Tech Stack

- **Backend:** Laravel 11 (PHP 8.2+)
- **Database:** MySQL / MariaDB
- **Frontend:** Tailwind CSS & Alpine.js
- **Icons:** Font Awesome 6
- **Notifications:** SweetAlert2

---

## 🚀 Panduan Instalasi Lokal

1. **Clone & Masuk ke Folder**
   ```bash
   git clone [https://github.com/FerdiS23/recruitment_Ferdi-Seswanto_Web_Portofolio.git](https://github.com/FerdiS23/recruitment_Ferdi-Seswanto_Web_Portofolio.git)
   cd recruitment_Ferdi-Seswanto_Web_Portofolio

2. **Install Library**
composer install
npm install && npm run build

3. **cara Menjalankan nya**
Php artisan serve di command Prompt

3. **Akses Admin**
/login untuk bisa mengakses adminnya
email :admin@test.com
password : password