# Aplikasi Pengaduan Masyarakat

Aplikasi ini dibangun menggunakan framework Laravel untuk memudahkan masyarakat dalam menyampaikan pengaduan atau aspirasi.

## Fitur Utama
- Registrasi dan Login Masyarakat
- Dashboard Admin & Petugas
- Manajemen Pengaduan (Validasi, Tanggapan, Selesai)
- Laporan Pengaduan (Export PDF)
- Multi-role Auth (Admin, Petugas, Masyarakat)

## Prasyarat
Pastikan perangkat Anda sudah terinstall:
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL / MariaDB (XAMPP/Laragon)

## Cara Instalasi di Device Baru

Ikuti langkah-langkah berikut untuk menjalankan project ini secara lokal:

1. **Clone Repository**
   ```bash
   git clone https://github.com/Tmx11712/pengaduan.git
   cd pengaduan
   ```

2. **Install Dependensi PHP**
   ```bash
   composer install
   ```

3. **Install Dependensi Javascript**
   ```bash
   npm install
   ```

4. **Setup Environment File**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   *Jika di Windows PowerShell:*
   ```powershell
   copy .env.example .env
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi Database**
   Buka file `.env` dan sesuaikan konfigurasi database Anda:
   ```env
   DB_DATABASE=pengaduan_masyarakat
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   *Pastikan Anda sudah membuat database dengan nama `pengaduan_masyarakat` di phpMyAdmin.*

7. **Migrasi dan Seeding**
   Jalankan migrasi untuk membuat tabel dan mengisi data awal:
   ```bash
   php artisan migrate --seed
   ```
   *Atau jika ingin menggunakan file SQL yang sudah ada:*
   Import file `pengaduan_masyarakat.sql` ke database Anda melalui phpMyAdmin.

8. **Link Storage**
   Untuk menampilkan gambar yang diupload:
   ```bash
   php artisan storage:link
   ```

9. **Build Assets**
   ```bash
   npm run dev
   ```

10. **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Akses aplikasi di: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Data Login (Default)

### Panel Admin / Petugas
**URL:** [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login)

| Role | Username | Password |
| :--- | :--- | :--- |
| **Admin** | Administrator | tama123 |
| **Petugas** | Officer | 123456 |

### Panel User / Masyarakat
**URL:** [http://127.0.0.1:8000/user/login](http://127.0.0.1:8000/user/login)

| Username | Password |
| :--- | :--- |
| user | user1234 |

---
*Dibuat untuk keperluan Tugas BNSP / Pembelajaran.*
