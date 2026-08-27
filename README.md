## 7.4 Ide Latihan Tambahan (Opsional)

1. **Lengkapi konsistensi menu** — tambahkan tautan "Daftar Anggota" dan
   "Tambah Anggota" ke menu `<nav>` di `index.html`, `buku/list.html`,
   dan `buku/tambah.html`. (Sudah)
2. **Tambah 2 baris data buku baru** di `buku/list.html` dengan meng-copy
   satu blok `<tr>...</tr>` lalu mengganti isinya. (Sudah)
3. **Tambah kolom baru** di tabel anggota, misalnya "Tanggal Bergabung",
   lengkap dengan `<th>` dan `<td>`-nya di setiap baris. (Sudah)
4. **Tambah field baru** di form tambah anggota, misalnya "Email"
   memakai `<input type="email">` (`type="email"` otomatis memvalidasi
   format alamat email tanpa perlu JavaScript tambahan).

## 10.4 Ide Latihan Tambahan (Opsional)

1. **Ubah skema warna** — ganti nilai `#1d5b8a` (warna biru tema) di
   seluruh file `style.css` dengan warna lain, misalnya hijau tua, lalu
   amati bagaimana warna itu konsisten muncul di header, judul section,
   tombol submit, dan header tabel — karena semuanya memakai nilai hex
   yang sama. (Sudah)
2. **Tambah kolom keempat** di grid kartu statistik — tambahkan satu
   `<article>` baru di HTML (misalnya "Buku Terlambat"), lalu ubah
   `repeat(3, 1fr)` menjadi `repeat(4, 1fr)` di CSS. (Sudah)
3. **Buat tombol ketiga di tabel** — tambahkan tombol "Detail" di antara
   Edit dan Hapus pada `buku/list.html`, lalu amati apakah warnanya
   sesuai harapan (ingat catatan di [bab 7 §7.6] tentang `:first-of-type`/`:last-of-type` yang berbasis posisi, bukan makna). Coba perbaiki dengan memberi `class` khusus jika warnanya tidak sesuai. (Sudah)
4. **Uji responsivitas sederhana** — perkecil lebar jendela browser
   secara bertahap sampai sangat sempit (seperti lebar HP), amati kapan
   `flex-wrap: wrap` pada navbar mulai memindahkan menu ke baris baru. (Terjadi Warp Saat Ukuran Layar Sudah Menyempit jadi konten bakal menyusun ke bawah)
