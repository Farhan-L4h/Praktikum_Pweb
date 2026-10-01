# LAPORAN JOBSHEET 5

**Nama:** Muhammad Farhan <br>
**NIM:** 264107027002 <br>
**Kelas:** TI 2G <br>
**No:** 14


## Jobsheet 5 — JavaScript DOM & Event
Sub-CPMK: Menerapkan manipulasi DOM & event JavaScript.

## Perubahan dari Jobsheet 4
- Tambah `assets/js/app.js`.
- Hamburger menu: checkbox hack (CSS) diganti tombol + JS (`nav.classList.toggle("nav-open")`).

![Humberger](imgLaporan/Jobhseet5/Humberger%20JS.png)

- Form Tambah Buku & Tambah Anggota: validasi client-side (`initValidasiForm`) — field wajib, rentang tahun, stok non-negatif — pesan error tampil inline via manipulasi DOM (`insertAdjacentElement`).

![](imgLaporan/Jobhseet5/required%20field.png)

- Tabel Daftar Buku & Daftar Anggota: kolom pencarian real-time (`initTableFilter`) yang menyaring baris via `keyup`.

![](imgLaporan/Jobhseet5/search%20realtime.png)

- Tombol Hapus (`.btn-hapus`): menampilkan `confirm()` lalu menghapus baris dari tampilan (masih front-end saja, belum ke server).

![](imgLaporan/Jobhseet5/Confirm.png)

<br>
<br>
