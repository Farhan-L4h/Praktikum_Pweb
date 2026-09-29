<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit;
}

$page_title = "Registrasi Petugas";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>

<main class="login-main">

    <section class="login-panel">
        <h1 style="text-align: center; margin-bottom: 2rem;">Register</h1>

        <?php if ($flash): ?>
            <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
        <?php endif; ?>

        <form action="proses_register.php" method="post">
            
            <p>
                <label for="Username">Name</label>
                <input type="text" name="nama" style="margin-bottom: 1rem;" />
            </p>

            <p>
                <label for="Username">Username</label>
                <input type="text" name="username" style="margin-bottom: 1rem;" />
            </p>
            <p>
                <label for="Password">Password</label>
                <input type="password" name="password" style="margin-bottom: 2rem;" />
            </p>
            <div class="Login-action">
                <button type="submit">Login</button>
            </div>
            <p style="text-align: center">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </p>
        </form>
    </section>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>