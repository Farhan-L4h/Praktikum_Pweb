# LAPORAN JOBSHEET 10

**Nama:** Muhammad Farhan <br>
**NIM:** 264107027002 <br>
**Kelas:** TI 2G <br>
**No:** 14


## Jobsheet 10 — Autentikasi & Manajemen Sesi

Sub-CPMK: Menerapkan autentikasi & manajemen sesi pengguna.

## Perubahan dari Jobsheet 9
- Tambah `sql/02_users.sql` — tabel `users` (nama, username, password, role).

- Tambah `auth/register.php` + `proses_register.php` (password disimpan dengan `password_hash()`, cek username duplikat), `auth/login.php` + `proses_login.php` (`password_verify()`), `auth/logout.php` (`session_destroy()`).

- Tambah `includes/auth.php` — guard clause: redirect ke `auth/login.php` bila `$_SESSION['user_id']` belum ada. **Wajib di-include sebagai baris pertama** (sebelum `header.php`) agar `header('Location: ...')` masih bisa dipanggil sebelum ada output HTML.

- `includes/header.php`: `session_start()` diubah jadi `if (session_status() === PHP_SESSION_NONE)` agar tidak konflik dengan `auth.php` yang juga memulai session; navbar kini menampilkan nama petugas + Logout jika sudah login, atau link Login jika belum.

- Halaman yang **dikunci** (butuh login): `buku/tambah.php`, `buku/edit.php`, `buku/proses_tambah.php`, `buku/proses_edit.php`, `buku/hapus.php`, seluruh halaman `anggota/*`.

- Halaman yang **tetap publik**: `index.php` (Beranda) dan `buku/list.php` (katalog buku bisa dilihat Tamu tanpa login — sesuai wireframe Jobsheet 4).

### Register & Login
![](./imgLaporan/Jobsheet10/Register%20Succes.png)
![](./imgLaporan/Jobsheet10/Login%20Succes.png)

### Create Table
![](./imgLaporan/Jobsheet10/Create%20Table.png)
