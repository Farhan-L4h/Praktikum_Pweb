# LAPORAN JOBSHEET 11

**Nama:** Muhammad Farhan <br>
**NIM:** 264107023002 <br>
**Kelas:** TI 2G <br>
**No:** 14


# Jobsheet 11 — Keamanan Web Dasar

Sub-CPMK: Menerapkan prinsip keamanan web dasar.

## Perubahan dari Jobsheet 10
- Tambah `includes/helpers.php` (`e()` untuk `htmlspecialchars`) dan `includes/csrf.php` (`csrf_token()`, `csrf_field()`, `csrf_verify()`), keduanya di-`require_once` dari `includes/header.php`.
- **XSS**: seluruh output data dari database/`$_GET` (judul, pengarang, nama, alamat, no_hp, nilai pencarian, nama petugas di navbar) dibungkus `e()`.
- **CSRF**: token tersembunyi ditambahkan ke semua form POST (Tambah/Edit/Hapus Buku & Anggota, Login, Register); setiap `proses_*.php` dan `hapus.php` memanggil `csrf_verify()` sebelum menyentuh database.
- **Session fixation**: `session_regenerate_id(true)` dipanggil di `auth/proses_login.php` setelah login berhasil.
- **SQL Injection**: diaudit ulang (tidak ada perubahan kode — sejak Jobsheet 8 semua query sudah prepared statement).
- Tambah `docs/security-checklist.md` — dokumen audit lengkap dengan bukti before/after per kerentanan.

## Cara menjalankan
**Opsi 1 — PHP built-in server**:
```bash
php -S localhost:8000
```

