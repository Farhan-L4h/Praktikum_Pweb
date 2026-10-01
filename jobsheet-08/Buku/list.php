<?php
$page_title = "Daftar Buku";
include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
$daftarBuku = $_SESSION['buku'] ?? [];

$daftarBuku = $pdo->query("SELECT * FROM buku ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

?>

<section>
  <h2>Daftar Buku</h2>

  <!-- flash -->
  <?php if ($flash): ?>
    <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
  <?php endif; ?>

  <div class="search-box">
    <label for="search-input">Cari Judul Buku</label>
    <input
      type="text"
      id="search-input"
      placeholder="Ketik judul buku..." />
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table>
      <!-- Header Table -->
      <thead>
        <tr>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Tahun</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <!-- Body Tabel / isi Table -->
      <tbody>
        <?php if (empty($daftarBuku)): ?>
          <tr>
            <td colspan="5">Belum ada data buku. Silakan tambah lewat menu "Tambah Buku".</td>
          </tr>
        <?php else: ?>
          <?php foreach ($daftarBuku as $buku): ?>
            <tr>
              <td><?php echo $buku['judul']; ?></td>
              <td><?php echo $buku['pengarang']; ?></td>
              <td><?php echo $buku['tahun']; ?></td>
              <td><?php echo $buku['stok']; ?></td>
              <td>
                <button type="button">Edit</button>
                <button type="button" class="btn-hapus">Hapus</button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
        <!-- <p id="loading-indicator" style="display: none">Memuat data...</p> -->
      </tbody>
    </table>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>