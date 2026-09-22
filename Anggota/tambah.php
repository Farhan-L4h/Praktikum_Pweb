<?php
$page_title = "Tambah Anggota";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>


<section class="form-section">
  <h2>Tambah Anggota</h2>

  <?php if ($flash): ?>
    <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
  <?php endif; ?>

  <!-- form -->
  <form id="form-tambah" action="proses_tambah.php" method="post" novalidate>
    <p>
      <label for="nama">Nama</label><br />
      <input type="text" id="nama" name="nama" required />
    </p>
    <p>
      <label for="no_anggota">No. Anggota</label><br />
      <input type="text" id="no_anggota" name="no_anggota" required />
    </p>

    <!-- tambahan email -->
    <p>
      <label for="email">Email</label><br />
      <input type="email" id="email" name="email" />
    </p>
    <p>
      <label for="alamat">Alamat</label><br />
      <input type="text" id="alamat" name="alamat" />
    </p>
    <p>
      <label for="no_hp">No. HP</label><br />
      <input type="text" id="no_hp" name="no_hp" />
    </p>
    <p>
      <!-- Tambahan status -->
      <span class="status-label">Status</span><br />
      <span class="radio-option">
        <input type="radio" id="aktif" name="status" value="aktif" checked />
        <label for="aktif">Aktif</label>
      </span>
      <span class="radio-option">
        <input type="radio" id="non-aktif" name="status" value="non-aktif" />
        <label for="non-aktif">Non-Aktif</label>
      </span>
    </p>

    <div class="form-actions">
      <!-- confirm -->
      <button type="submit">Simpan</button>
    </div>
  </form>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>