<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/koneksi.php';

$totalBuku = $pdo->query("SELECT COUNT(*) FROM buku")->fetchColumn();
$totalAnggota = $pdo->query("SELECT COUNT(*) FROM anggota")->fetchColumn();
?>
   
   <!-- Konten 1 -->
      <section class="hero">
        <span class="hero-chip">Library Management</span>
        <h2>SIMPUS-MINI</h2>
        <p class="hero-sub">Sistem Informasi Perpustakaan Mini</p>
        <p class="hero-desc">
          Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.
        </p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="buku/list.php">Lihat Buku</a>
          <a class="btn btn-secondary" href="peminjaman/tambah.php">Pinjam Buku</a>
        </div>
      </section>

      <!-- Konten 2 -->
      <section class="statistik">
        <div class="section-head">
          <div>
            <h2>Ringkasan</h2>
            <p class="section-sub">Statistik perpustakaan hari ini</p>
          </div>
        </div>
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
