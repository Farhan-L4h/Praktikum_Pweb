# LAPORAN JOBSHEET 6

**Nama:** Muhammad Farhan <br>
**NIM:** 264107027002 <br>
**Kelas:** TI 2G <br>
**No:** 14


## Jobsheet 6 — Fetch API & JSON

Sub-CPMK: Menerapkan komunikasi asinkron (AJAX/fetch, JSON).

## Perubahan dari Jobsheet 5
- Tambah `data/buku.json` (10 objek) dan `data/anggota.json` (4 objek) sebagai pengganti sementara API sungguhan.

- `buku/list.html` & `anggota/list.html`: `<tbody>` dikosongkan, baris kini dirender dinamis oleh `assets/js/buku.js` / `assets/js/anggota.js` menggunakan `fetch` + `async/await`. 

![](imgLaporan/Jobsheet6/fetch%20anggota.png)
![](imgLaporan/Jobsheet6/fetch%20buku.png)

- Loading indicator (`#loading-indicator`) tampil selama proses fetch (disimulasikan dengan delay 600ms).

![](imgLaporan/Jobsheet6/delay%20fetch.png)

- Penanganan error (`try/catch`) menampilkan pesan di dalam tabel bila fetch gagal.

![](imgLaporan/Jobsheet6/failed%20fetch.png)

- `app.js`: `initHapusConfirm` diubah ke **event delegation** (`document.addEventListener("click", ...)`) karena tombol Hapus sekarang berada di baris yang dibuat setelah halaman selesai dimuat.

![](imgLaporan/Jobsheet6/delete%20confirm.png)
