# LAPORAN JOBSHEET 7

**Nama:** Muhammad Farhan <br>
**NIM:** 264107027002 <br>
**Kelas:** TI 2G <br>
**No:** 14


## Jobsheet 7 — PHP Dasar & Form Handling

Sub-CPMK: Mengimplementasikan dasar PHP & pengolahan form.

## Perubahan dari Jobsheet 6
- Semua halaman `.html` diubah menjadi `.php`.

- Diperkenalkan `includes/header.php` & `includes/footer.php` untuk menghindari duplikasi navbar/footer di setiap halaman (dipakai lewat `include`).

- Path CSS/JS/menu memakai path **relatif** (`assets/css/style.css`, `index.php`, dst, tanpa awalan `/`), dihitung otomatis di `includes/header.php` berdasarkan kedalaman folder halaman yang sedang diakses (`$base` = `""` di root, `"../"` untuk halaman satu level ke dalam seperti `buku/`, `anggota/`). Jadi proyek ini tetap berjalan benar walau diakses dari root server (`php -S`) **maupun** lewat subfolder (mis. Laragon dengan document root di folder induk).

- `buku/tambah.php` & `anggota/tambah.php`: form kini `method="post"` mengarah ke `proses_tambah.php` masing-masing.

- `buku/proses_tambah.php` & `anggota/proses_tambah.php`: memvalidasi `$_POST` di server (validasi ini **terpisah** dari validasi JS di Jobsheet 5 — bisa berjalan sendiri walau JS dimatikan), lalu menyimpan sementara ke `$_SESSION['buku']` / `$_SESSION['anggota']` (array), redirect ke `list.php`.

- `buku/list.php` & `anggota/list.php`: tabel dirender dari `$_SESSION` via `foreach` (menggantikan pendekatan fetch/JSON di Jobsheet 6 — rendering utama sekarang di server).

- Flash message sukses/gagal ditampilkan lewat `$_SESSION['flash']`.
![](./imgLaporan/Jobsheet7/Flash%20Success.png)
![](/imgLaporan/Jobsheet7/flash%20failed.png)

- File `assets/js/buku.js`, `assets/js/anggota.js`, dan folder `data/` dari Jobsheet 6 **dihapus** karena rendering sudah dipindah ke server-side PHP.
