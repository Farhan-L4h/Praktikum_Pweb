<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit;
}

$page_title = "Login";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>

<div class="login-main">

    <div class="deco deco-1" aria-hidden="true"></div>
    <div class="deco deco-2" aria-hidden="true"></div>
    <div class="deco deco-3" aria-hidden="true"></div>

    <section class="login-panel">
        <span class="auth-eyebrow">SIMPUS-MINI</span>
        <h1 class="panel-title">Staff Login</h1>

        <?php if ($flash): ?>
            <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
        <?php endif; ?>

        <form action="proses_login.php" method="post">
            <?php echo csrf_field(); ?>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" autocomplete="username" />
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password" autocomplete="current-password" />
            </p>
            <div class="Login-action">
                <button type="submit">Login &rarr;</button>
            </div>
            <p class="auth-switch">
                Belum punya akun? <a href="register.php">Daftar di sini</a>
            </p>
        </form>
    </section>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>