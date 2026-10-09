<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/csrf.php';
$sudahLogin = isset($_SESSION['user_id']);


// lewat vhost yang document root-nya langsung folder ini.
$__jobsheetRoot = dirname(__DIR__);
$__scriptDir = dirname($_SERVER['SCRIPT_FILENAME']);
$__rel = ltrim(str_replace('\\', '/', substr($__scriptDir, strlen($__jobsheetRoot))), '/');
$base = $__rel === '' ? '' : str_repeat('../', substr_count($__rel, '/') + 1);

// ===== Presentation only: state aktif untuk navbar =====
$__page = strtolower(basename($_SERVER['SCRIPT_NAME']));
$__dir  = strtolower(basename($__scriptDir));
if (in_array($__page, ['proses_tambah.php', 'proses_edit.php', 'proses_kembali.php', 'hapus.php'], true)) {
    $__page = 'list.php';
}
$__aktif = function ($target) use ($__page, $__dir) {
    $__target = strtolower($target);
    $__targetPage = basename($__target);
    $__targetDir = strtolower(basename(dirname($__target)));
    if ($__targetDir === '' || $__targetDir === '.') {
        return $__page === 'index.php';
    }
    if ($__targetPage === 'list.php') {
        $__samePage = in_array($__page, ['list.php', 'edit.php'], true);
    } else {
        $__samePage = ($__page === $__targetPage);
    }
    return $__samePage && $__dir === $__targetDir;
};
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPUS-Mini<?php echo isset($page_title) ? ' | ' . $page_title : ''; ?></title>
    <link rel="stylesheet" href="<?php echo $base; ?>asset/css/style.css">
</head>

<body>
    <header>
        <div class="brand">
            <h1>SIMPUS-Mini</h1>
            <span class="brand-tag">Library Management</span>
        </div>
        <button type="button" id="nav-toggle-btn" class="nav-toggle-label" aria-label="Menu" aria-expanded="false">&#9776; MENU</button>
        <nav>
            <ul>
                <li><a href="<?php echo $base; ?>index.php" class="<?php echo $__aktif('index.php') ? 'active' : ''; ?>">Beranda</a></li>
                <li><a href="<?php echo $base; ?>buku/list.php" class="<?php echo $__aktif('buku/list.php') ? 'active' : ''; ?>">Daftar Buku</a></li>
                <?php if ($sudahLogin): ?>
                    <li><a href="<?php echo $base; ?>buku/tambah.php" class="<?php echo $__aktif('buku/tambah.php') ? 'active' : ''; ?>">Tambah Buku</a></li>
                    <li><a href="<?php echo $base; ?>anggota/list.php" class="<?php echo $__aktif('anggota/list.php') ? 'active' : ''; ?>">Daftar Anggota</a></li>
                    <li><a href="<?php echo $base; ?>anggota/tambah.php" class="<?php echo $__aktif('anggota/tambah.php') ? 'active' : ''; ?>">Tambah Anggota</a></li>
                    <li><a href="<?php echo $base; ?>peminjaman/tambah.php" class="<?php echo $__aktif('peminjaman/tambah.php') ? 'active' : ''; ?>">Peminjaman Baru</a></li>
                    <li><a href="<?php echo $base; ?>peminjaman/kembali.php" class="<?php echo $__aktif('peminjaman/kembali.php') ? 'active' : ''; ?>">Pengembalian</a></li>
                    <li><a href="<?php echo $base; ?>peminjaman/riwayat.php" class="<?php echo $__aktif('peminjaman/riwayat.php') ? 'active' : ''; ?>">Riwayat</a></li>
                <?php endif; ?>
            </ul>
            <div class="auth-status">
                <?php if ($sudahLogin): ?>
                    <span><?php echo $_SESSION['nama']; ?></span>
                    <a href="<?php echo $base; ?>auth/logout.php">Logout</a>
                <?php else: ?>
                    <a href="<?php echo $base; ?>auth/login.php">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main>