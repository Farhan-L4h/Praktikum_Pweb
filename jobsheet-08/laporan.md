# LAPORAN JOBSHEET 8

**Nama:** Muhammad Farhan <br>
**NIM:** 264107027002 <br>
**Kelas:** TI 2G <br>
**No:** 14


## Jobsheet 8 — Koneksi PostgreSQL

Sub-CPMK: Menghubungkan aplikasi dengan basis data PostgreSQL.

## Perubahan dari Jobsheet 7
- Tambah `sql/01_buku_anggota.sql` — DDL tabel `buku` dan `anggota` (ERD dasar).

- Tambah `includes/koneksi.php` — koneksi `PDO` driver `pgsql`.

- `buku/proses_tambah.php` & `anggota/proses_tambah.php`: `$_SESSION['buku'][] = ...` (Jobsheet 7) diganti `INSERT ... RETURNING id` via prepared statement.
![](./imgLaporan/Jobsheet8/Fetch%20Buku%20on%20website.png)
![](./imgLaporan/Jobsheet8/Datas%20in%20database.png)
![](./imgLaporan/Jobsheet8/Anggota%20Succes.png)


- `buku/list.php` & `anggota/list.php`: sumber data diganti dari `$_SESSION` menjadi `SELECT * FROM ... ORDER BY id DESC`.

- `index.php`: kartu statistik Total Buku/Anggota kini `SELECT COUNT(*)` dari database (bukan dummy/session lagi).
![](./imgLaporan/Jobsheet8/Statistik%20Count.png)
