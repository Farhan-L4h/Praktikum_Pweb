<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';

$totalBuku = count($_SESSION['buku'] ?? []);
$totalAnggota = count($_SESSION['anggota'] ?? []);
?>
   
   <!-- Konten 1 -->
      <section>
        <h2>Selamat Datang di Sistem Perpustakaan Mini</h2>
        <p>
          Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.
        </p>
      </section>

      <!-- Konten 2 -->
      <section class="statistik">
        <h2>Ringkasan</h2>
        <div class="kartu-statistik">
          <article>
            <h3>Total Buku</h3>
            <p><?php echo $totalBuku; ?></p>
          </article>
          <article>
            <h3>Total Anggota</h3>
            <p><?php echo $totalAnggota; ?></p>
          </article>
          <article>
            <h3>Sedang Dipinjam</h3>
            <p>0</p>
          </article>
          <!-- <article>
            <h3>Terlambat</h3>
            <p>9</p>
          </article> -->
        </div>
      </section>      
<?php include __DIR__ . '/includes/footer.php'; ?>
