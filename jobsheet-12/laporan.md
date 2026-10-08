# LAPORAN JOBSHEET 12

**Nama:** Muhammad Farhan <br>
**NIM:** 264107023002 <br>
**Kelas:** TI 2G <br>
**No:** 14


# Jobsheet 12 — Integrasi Modul Peminjaman

Sub-CPMK: Mengintegrasikan front-end dan back-end proyek secara utuh.

## Perubahan dari Jobsheet 11
- Tambah `sql/03_peminjaman.sql` — tabel `peminjaman` (relasi ke `buku` dan `anggota`), melengkapi ERD yang sudah dirancang di Jobsheet 8.
- Tambah modul **Peminjaman** (menghubungkan seluruh entitas yang sudah dibangun sejak Jobsheet 8-10 sekaligus):
  - `peminjaman/tambah.php` + `proses_tambah.php`: pilih anggota + buku (dropdown hanya `stok > 0`), simpan transaksi **dan** kurangi stok buku dalam satu **transaction** (`beginTransaction`/`commit`/`rollBack`) dengan `SELECT ... FOR UPDATE` untuk mencegah race condition stok.
  - `peminjaman/kembali.php` + `proses_kembali.php`: daftar transaksi aktif (`status = 'dipinjam'`), tombol Kembalikan menambah kembali stok buku dalam transaction serupa.
  - `peminjaman/riwayat.php`: histori peminjaman per anggota (JOIN `peminjaman` + `buku`).
- `includes/header.php`: navbar menambahkan menu Peminjaman Baru, Pengembalian, Riwayat (hanya saat login).
- `index.php`: kartu "Sedang Dipinjam" kini `COUNT(*) FROM peminjaman WHERE status = 'dipinjam'` (sebelumnya statis `0`).

## Cara menjalankan
```bash
psql -d simpus_mini -f sql/03_peminjaman.sql
```
**Opsi 1 — PHP built-in server**:
```bash
php -S localhost:8000
```

### Bukti Pengerjaan 

#### Peminjanman 
![](./imgLaporan/Peminjaman%20Buku.png)

#### Transaksi Aktif 
![](./imgLaporan/Transaksi%20Aktif.png)
![](./imgLaporan/Buku%20Dikembalikan.png)

#### Riwayat Peminjaman
![](./imgLaporan/Riwayat%20Peminjaman.png)
